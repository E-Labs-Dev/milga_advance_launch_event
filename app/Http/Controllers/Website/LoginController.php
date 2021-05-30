<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    public  $registration ;

    public function __construct()
    {
        $this->registration = new Registration();
    }

    public function store(LoginUserRequest $request)
    {
        $registration = $this->registration->findById($request->phone);

        Auth::guard('registration')->login($registration);

        return response()->json('done');

    }
}
