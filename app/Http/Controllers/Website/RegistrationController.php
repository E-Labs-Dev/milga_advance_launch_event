<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Services\qrCodeGenerated;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public  $qrCode ;
    public  $registration ;

    public function __construct()
    {
        $this->qrCode = new qrCodeGenerated();
        $this->registration = new Registration();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationRequest $request)
    {

        try {
            DB::beginTransaction();

            $userCode     = '12'.rand(1000,9999);

            $qrcode       = $this->qrCode->create($userCode);

            setCurrentUser($request->phone);

            $requestData  = $request->validated();

            $requestData['qrcode'] = $qrcode;

            $requestData ['user_code']=$userCode;

            $registraion =  $this->registration->create($requestData);

            if (strpos($request->venue, 'Cairo') !== false) {
                $eventTime    = 'July 30, 2021';
                $location     = 'The Nile Ritz-Carlton, Cairo';
                $locationMap  = 'https://maps.app.goo.gl/9MXYY5CqRjHsDEY26';
            }else{
                $eventTime    = 'August 6, 2021';
                $location     = 'Sunrise Alex Avenue Hotel, Alexandria';
                $locationMap  = 'https://maps.app.goo.gl/6KTDrkL2f1eE34eW6';
            }

            sendMail($registraion->original_path,$request->email,$userCode, $request->first_name, $eventTime, $location,$locationMap);

            sendWhatsApp($registraion->original_path,$request->phone,$userCode);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json(['error' => 'Data Not Save .'],409);
        }
        return response()->json($registraion->phone);
    }
}
