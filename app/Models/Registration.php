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

    public function games(){
        return $this->hasMany(Game::class,'user_code','user_code');
    }

    public function venue(){
        return $this->belongsTo(Venue::class);
    }

    public function getOriginalPathAttribute()
    {
        return url('/').'/public/qrcodes/'.$this->qrcode;
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($model){
            $model->games()->delete();
        });
    }
}
