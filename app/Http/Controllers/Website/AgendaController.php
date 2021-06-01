<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameReference;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public $game;
    public $game_reference;
    public function __construct()
    {
        $this->game_reference = new GameReference();
        $this->game = new Game();
    }
    public function index(Request $request)
    {
        $user = getCurrentUser();
        $games = $this->game_reference->getWithGameAndUser($user->user_code);

        return view('website.agenda',compact('games'));

    }
}
