<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameReference;
use App\Models\Registration;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public $registration;
    public $game;
    public $game_reference;

    public function __construct()
    {
        $this->registration = new Registration();
        $this->game = new Game();
        $this->game_reference = new GameReference();
    }
    public function index(Request $request)
    {
        $registration = getCurrentUser();

        if (!$registration){
            return redirect()->route('home');
        }else {
            return view('website.profile')->with([
                'registration' => $registration,
                'data' => $this->getGames($registration->code)
            ]);
        }
    }

    public function logout()
    {
        clearCurrentUser();
        return redirect()->route('home');
    }

    private function getGames($registration_code)
    {
        $game_references = $this->game_reference->all();
        $data = [];
        foreach($game_references as $ref) {
            $my_score = $this->game->where([
                'code' => $ref->code,
                'user_code' => $registration_code
            ])->orderBy('score', 'DESC')->first();

            $highest_score = $this->game->where([
                'code' => $ref->code
            ])->orderBy('score', 'DESC')->first();

            $highest_user = $highest_score ? $this->registration->findByCode($highest_score->user_code) : null;

            $data[] = [
                'game_name' => $ref->name,
                'game_code' => $ref->code,
                'last_played' => $my_score->created_at ?? '',
                'my_score' => $my_score->score ?? '',
                'highest_score' => $highest_score->score ?? '',
                'highest_score_user' => $highest_user,
            ];
        }
        return $data;
    }
}
