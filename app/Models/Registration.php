<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Registration extends Authenticatable
{
    use HasFactory;

    protected $guard = 'registration';

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

     public function getAll($attend = null){
         $registrations =  $this->query()->select('id','first_name','user_code','last_name','email','phone','governorate','venue','created_at','is_attend','updated_at')->orderBy('id','asc');
        if (isset($attend)){
            $registrations->where('is_attend',$attend);
        }
        return  $registrations->get();
     }

     public function destroyById($id){

         $registration =  $this->findOrFail($id);

         $registration->delete();

     }

     public function changeStatusById($id){
         $registration =  $this->findOrFail($id);
         $registration->is_attend=0;
         $registration->save();
     }

     public function findByPhone($phone){

         $registration =$this->where('phone',$phone)->first();

        if (!$registration){
            return redirect()->route('home');
        }else{
            return $registration;
        }

     }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($model){
            $model->games()->delete();
        });
    }
}
