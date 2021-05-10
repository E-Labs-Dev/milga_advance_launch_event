<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class RegistrationController extends Controller
{
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

            $qrcode = Str::random(10).'.png';

            QrCode::size(500)->format('png')->generate($request->email, public_path('qrcodes/'.$qrcode));

            $request_data           = $request->validated();
            $request_data ['qrcode']= $qrcode;

            $registraion =  $this->registration->create($request_data);

            $data = ['qrcode' => $registraion->full_path];

            Mail::to($request->email)->send(new RegistrationMail($data));

            DB::commit();
        } catch (\Exception $e) {

            DB::rollBack();

            Log::error($e->getMessage());

            return redirect()->route('home')->with('error','Data Deleted');
        }
        return redirect()->route('home')->with('message','Thank you for registration.');
    }
}
