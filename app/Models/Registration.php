<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Registration extends Model
{
    use HasFactory;

    protected $table = 'registrations';

    protected $fillable = ['first_name', 'last_name','email','phone','specialty_id','venue_id','qrcode','user_code'];

    protected $appends = ['original_path'];

    public function specialty(){
        return $this->belongsTo(Specialty::class);
    }

    public function venue(){
        return $this->belongsTo(Venue::class);
    }

    public function getOriginalPathAttribute()
    {
        return env('APP_URL').'/public/qrcodes/'.$this->qrcode;
    }
}
