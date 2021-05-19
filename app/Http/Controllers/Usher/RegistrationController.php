<?php

namespace App\Http\Controllers\Usher;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationAttendRequest;
use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public  $registration ;
    public function __construct()
    {
        $this->registration = new Registration();
        $this->middleware('auth:usher');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $userCode
     * @return \Illuminate\Http\Response
     */
    public function show($userCode)
    {
        $registration = $this->registration->select('user_code','first_name','last_name','is_attend','email','governorate','phone','venue')
            ->where('user_code',$userCode)->first();

        if (!$registration) {
            return  view('errors.404');
        }

        return  view('dashboard.registrations.show',compact('registration'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function attend(RegistrationAttendRequest $request)
    {

        $this->registration->where('user_code',$request->userCode)->update(['is_attend'=>true]);

        return redirect()->route('registrations.show',$request->userCode)->with('message','his user has been attended successfully.');
    }

}
