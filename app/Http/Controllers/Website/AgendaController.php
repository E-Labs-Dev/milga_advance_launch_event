<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public  $game ;
    public function __construct()
    {

        $this->game = new Game();

    }
    public function index(Request $request)
    {
        $conditions = [];
        if($request->filled('game_code')) {
            $conditions['games.code'] = $request->game_code;
        }
        $games = $this->game->getAll($conditions);

        return view('website.agenda',compact('games'));

    }
}
