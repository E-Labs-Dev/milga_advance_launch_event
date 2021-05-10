<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Registration extends Model
{
    use HasFactory;

    protected $table = 'registrations';

    protected $fillable = ['first_name', 'last_name','email','phone','specialty_id','venue_id','qrcode'];

    public function specialty(){
        return $this->belongsTo(Specialty::class);
    }

    public function venue(){
        return $this->belongsTo(Venue::class);
    }

    public function getFullPathAttribute()
    {
        return env('APP_URL').'/'.$this->qrcode;
    }

    /******************************database***************/
    public  function store($request){



        \QrCode::size(500)->format('png')->generate($request['email'], public_path('images/'.Str::random(10).'.png')); /*todo remove this line */

        $registraion               = new self(); /*todo store request validated from controller and make qr code login in service class */
        $registraion->first_name   = $request['first_name'];
        $registraion->last_name    = $request['last_name'];
        $registraion->phone        = $request['phone'];
        $registraion->email        = $request['email'];
        $registraion->specialty_id = $request['specialty_id'];
        $registraion->venue_id     = $request['venue_id'];
        $registraion->qrcode       = 'images/'.Str::random(10).'.png';

        if($registraion->save()){
            $qrcode = \QrCode::format('png')->size(200)->errorCorrection('H')->generate($registraion->id);
            $qrcode ->store('/images', 'public');
        }

        return  $registraion->full_path;
    }
}
