<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\RegistrationMail;
use App\Models\Registration;
use App\Models\Specialty;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venues = Venue::select('id','name')->get();
        $specialties = Specialty::select('id','name')->get();
        return  view('dashboard.registrations.create',compact(['venues','specialties']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationRequest $request)
    {
        try {
            DB::beginTransaction();
            /*todo call here qr code service class*/
            $qrcode =  $this->registration->store($request->all());
            $data = ['qrcode' => $qrcode];
            Mail::to($request->email)->send(new RegistrationMail($data));

            DB::commit();
        } catch (Exception $e) {

            DB::rollBack();

            Log::error($e->getMessage());

            return back()->with('failure','Error Please Try Again');
        }
        return back()->with('success','thanks for registration ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
