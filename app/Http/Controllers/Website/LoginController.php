<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public  $registration ;

    public function __construct()
    {
        $this->registration = new Registration();
    }

    public function login(LoginUserRequest $request)
    {
        try {
            $user = $this->registration->findByPhone($request->number_phone);
            if (!$user) {
                throw new \Exception("Can't find user", 404);
            }
            setCurrentUser($request->number_phone);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), $e->getCode());
        }
        return response()->json($request->number_phone, 200);

    }
}
