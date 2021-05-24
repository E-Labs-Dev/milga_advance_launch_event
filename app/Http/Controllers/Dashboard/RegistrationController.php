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
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = $this->registration->select('id','first_name','user_code','last_name','email','phone','governorate','venue','is_attend','created_at')->orderBy('id','asc')->get();

        return  view('dashboard.registrations.index',compact('registrations'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $registration =  $this->registration->findOrFail($request->id);

        $registration->delete();

        return redirect()->route('registrations.index')->with('message','Done data deleted.');
    }
}
