<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\GameRequest;
use App\Models\Game;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GameController extends Controller
{
    public  $game ;
    public function __construct()
    {
        $this->game = new Game();
        $this->middleware('auth')->except('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = $this->game->getAll();
        return  view('dashboard.games.index',compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameRequest $request)
    {

        try {
            DB::beginTransaction();

            $this->game->create(['code'=>$request->gameCode,'user_code'=>$request->userCode,'score'=>$request->gameScore]);

            DB::commit();

        } catch (Exception $e) {

            DB::rollBack();

            Log::error($e->getMessage());

            return response()->json(['error' => 'data not save'], 409);
        }

        return response()->json(['message','data saved.']);
    }

}
