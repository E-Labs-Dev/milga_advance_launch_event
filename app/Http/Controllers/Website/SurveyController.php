<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\SurveyRequest;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public  $survey ;

    public function __construct()
    {
        $this->survey = new Survey();
    }

    public function index()
    {
        return view('website.survey');
    }

    public function store(SurveyRequest $request)
    {
        $data_request = $request->validated();

        $data_request['registration_id']= getCurrentUser()->id;

        $this->survey->create($data_request);

       return redirect()->route('survey')->with('message','Done');
    }
}
