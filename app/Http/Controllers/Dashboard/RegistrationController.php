<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Enums\AttendStatus;
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
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = $this->registration->getAll();

        return  view('dashboard.registrations.index',compact('registrations'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function attendees()
    {
        $registrations = $this->registration->getAll( AttendStatus::ATTEND);

        return  view('dashboard.registrations.attendees',compact('registrations'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $this->registration->destroyById($request->id);

        return redirect()->route('registrations.index')->with('message','Done data deleted.');
    }
}
