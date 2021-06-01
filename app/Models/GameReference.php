<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameReference extends Model
{
    use HasFactory;

    public function getWithGameAndUser($user_code)
    {
        return $this->select(
            'game_references.code','game_references.name','games.score','games.created_at'
        )
            ->leftJoin('games','games.code','=','game_references.code')
            ->leftJoin('registrations as R','R.user_code','=','games.user_code')
            ->where('games.user_code',$user_code)
            ->orderBy('game_references.id','DESC')
            ->get();

    }
}
