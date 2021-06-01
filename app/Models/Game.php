<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable =['user_code','score','code'];

    public function scopeUser($query, $code)
    {
        return $query->where('user_code', $code);
    }

    public function getAll($where = []){

        return $this->leftJoin('game_references','games.code','=','game_references.code')
            ->leftJoin('registrations','games.user_code','=','registrations.user_code')
            ->select('games.id','games.user_code','games.score','game_references.code','game_references.name','registrations.first_name','registrations.last_name','games.created_at')
            ->where($where)
            ->orderBy('games.id','asc')
            ->get();

    }

}
