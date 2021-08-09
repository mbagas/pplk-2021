<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $table = 'scores';
    protected $fillable = ['users_id','games_id', 'skor'];

    Public function Game(){
        return $this->belongsTo(Game::class, 'games_id');
    }

    public function User(){
        return $this->belongsTo(User::class, 'users_id');
    }
}
