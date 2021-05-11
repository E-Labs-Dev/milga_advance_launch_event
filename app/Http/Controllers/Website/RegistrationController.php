<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Mail\RegistrationMail;
use App\Services\qrCodeGenerated;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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
        /*todo call here qr code service class*/
        try {
            DB::beginTransaction();

            $userCode     = 'mlg_'.Str::random(3);

            $qrcode       = $this->qrCode->created($userCode);

            $requestData  = $request->validated();

            $requestData ['qrcode']=$qrcode;

            $requestData ['user_code']=$userCode;

            $registraion =  $this->registration->create($requestData);

            $data = ['qrcode' => $registraion->original_path];

            Mail::to($request->email)->send(new RegistrationMail($data));

            DB::commit();

        } catch (Exception $e) {

            DB::rollBack();

            Log::error($e->getMessage());

            return redirect()->route('home')->with('error','Data Not Save')->withInput();
        }

        return redirect()->route('home')->with('message','Thank you for registration,Please Check your email.');
    }
}
