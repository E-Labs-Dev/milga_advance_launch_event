<?php

namespace App\Http\Controllers\Usher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index() {
        return view('usher.home');
   }
}
