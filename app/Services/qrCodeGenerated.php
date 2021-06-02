<?php

namespace App\Services;

use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class qrCodeGenerated
{
    public function create($userCode){

        $qrcode = Str::random(10).'.png';

        $url    = route('registrations.show',$userCode);

        QrCode::size(1000)->format('png')->generate($url, public_path('qrcodes/'.$qrcode));

        return $qrcode;
    }
}
