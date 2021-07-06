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

    protected $appends = ['original_path', 'full_name'];

    public function games(){
        return $this->hasMany(Game::class,'user_code','user_code');
    }

    public function venue(){
        return $this->belongsTo(Venue::class);
    }

    public function getOriginalPathAttribute()
    {
        return url('/').'/qrcodes/'.$this->qrcode;
    }

    public function getFullNameAttribute()
    {
        return "$this->first_name $this->last_name";
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

         if ($registration->qrcode && file_exists(public_path('qrcodes/'.$registration->qrcode))) {
             unlink(public_path('qrcodes/'.$registration->qrcode));
         }

         $registration->delete();

     }

     public function changeStatusById($id){
         $registration =  $this->findOrFail($id);
         $registration->is_attend=0;
         $registration->save();
     }

     public function findByPhone($phone){
        return $this->where('phone',$phone)->first();
     }

    public function findByCode($code){
        return $this->where('user_code',$code)->first();
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($model){
            $model->games()->delete();
        });
    }
}
