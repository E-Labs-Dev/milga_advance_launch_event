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

            $venue = explode('in', $request->venue);

            $eventTime = $venue[0];
            $location = $venue[1];

            sendMail($registraion->original_path,$request->email,$userCode, $request->first_name, $eventTime, $location);
            //sendWhatsApp($registraion->original_path,$request->phone,$userCode);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json(['error' => 'Data Not Save .'],409);
        }
        return response()->json($registraion->phone);
    }
}
