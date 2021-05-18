<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationAttendRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RegistrationController extends Controller
{
    public  $registration ;
    public function __construct()
    {
        $this->registration = new Registration();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = $this->registration->select('id','first_name','user_code','last_name','email','phone','governorate','venue','created_at')->get();

        return  view('dashboard.registrations.index',compact('registrations'));
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

        return redirect()->route('registrations.show',$request->userCode)->with('message','Done this user attend .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registration =  $this->registration->findOrFail($id);

        $registration->delete();

        return redirect()->route('registrations.index')->with('message','Done data deleted.');
    }
}
