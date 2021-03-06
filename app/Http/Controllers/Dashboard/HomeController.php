<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Registration;
use App\Models\Survey;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $registrations        = Registration::count();
        $games                = Game::count();
        $surveys                = Survey::count();
        $registrationsAttend  = Registration::where('is_attend',1)->count();

        return view('dashboard.home',compact('registrations','registrationsAttend','games', 'surveys'));
    }
}
