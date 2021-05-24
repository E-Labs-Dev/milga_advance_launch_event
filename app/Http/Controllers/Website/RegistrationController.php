<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Services\qrCodeGenerated;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Registration;
use Illuminate\Support\Str;

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

            $userCode     = 'mlg_'.Str::random(3);

            $qrcode       = $this->qrCode->create($userCode);

            $requestData  = $request->validated();

            $requestData ['qrcode']=$qrcode;

            $requestData ['user_code']=$userCode;

            $registraion =  $this->registration->create($requestData);

            sendMail($registraion->original_path,$request->email);

            // $data = ['qrcode' => $registraion->original_path];

            // Mail::to($request->email)->send(new RegistrationMail($data));

            DB::commit();

        } catch (Exception $e) {

            DB::rollBack();

            Log::error($e->getMessage());

            return response()->json(['error' => 'Data Not Save .'],409);
        }
        return response()->json(['success' => 'Thank you For Registration. Please check your email.']);
    }
}
