<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $table = 'registrations';

    protected $fillable = ['first_name', 'last_name','email','phone','specialty_id','venue_id','qrcode'];

    public function specialty(){
        return $this->hasOne(Specialty::class);
    }

    public function venue(){
        return $this->hasOne(Venue::class);
    }

    /******************************database*/
    public  function store($request){

        \QrCode::size(500)->format('png')->generate($request['email'], public_path('images/'.$request['phone'].'.png'));

        $registraion               = new self();
        $registraion->first_name   = $request['first_name'];
        $registraion->last_name    = $request['last_name'];
        $registraion->phone        = $request['phone'];
        $registraion->email        = $request['email'];
        $registraion->specialty_id = $request['specialty_id'];
        $registraion->venue_id     = $request['venue_id'];
        $registraion->qrcode       = 'images/'.$request['phone'].'.png';
        $registraion->save();

        return  $registraion->qrcode;
    }
}
