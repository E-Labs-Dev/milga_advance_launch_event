<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public  $registration ;

    public function __construct()
    {
        $this->registration = new Registration();
    }
    public function index($phone)
    {

      return  $this->registration->findByPhone($phone);

    }
}
