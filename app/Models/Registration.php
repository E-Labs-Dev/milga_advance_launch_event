<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Registration extends Model
{
    use HasFactory;

    protected $table = 'registrations';

    protected $fillable = ['first_name', 'last_name','email','phone','venue','qrcode','user_code','governorate'];

    protected $appends = ['original_path'];

    public function specialty(){
        return $this->belongsTo(Specialty::class);
    }

    public function venue(){
        return $this->belongsTo(Venue::class);
    }

    public function getOriginalPathAttribute()
    {
        return url('/').'/public/qrcodes/'.$this->qrcode;
    }
}
