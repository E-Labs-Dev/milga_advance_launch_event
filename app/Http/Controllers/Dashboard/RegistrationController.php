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
        $registrations = Registration::leftJoin('specialties','registrations.specialty_id','=','specialties.id')
            ->leftJoin('venues','registrations.venue_id','=','venues.id')->select('registrations.id','registrations.first_name',
                'registrations.last_name','registrations.email','registrations.phone','specialties.name as specialty','venues.name as venue','registrations.created_at')->get();

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
        $registration = $this->registration
            ->leftJoin('specialties','registrations.specialty_id','=','specialties.id')
            ->leftJoin('venues','registrations.venue_id','=','venues.id')
            ->select('registrations.user_code','registrations.first_name','registrations.last_name','registrations.is_attend',
                'registrations.email','registrations.governorate','registrations.phone','specialties.name as specialty','venues.name as venue')
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
