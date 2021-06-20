<?php

namespace App\Http\Controllers\Usher;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public  $registration ;
    public function __construct()
    {
        $this->registration = new Registration();
        $this->middleware('auth:usher');
    }
    public function index (SearchRequest $request)
    {

        $registration = $this->registration->findByCode( $request->validated());

        return redirect()->route('registrations.show',[$registration->user_code]);

    }
}
