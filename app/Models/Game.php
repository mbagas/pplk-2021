<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';
    protected $fillable = ['kategoriGame_id','skor'];

    public function FindCode(){
        return $this->hasOne(FindCode::class, 'games_id');
    }

    public function TebakGedung(){
        return $this->hasOne(TebakGedung::class, 'games_id');
    }

    public function Score(){
        return $this->hasMany(Score::class, 'games_id');
    }

    public function KategoriGame(){
        return $this->belongsTo(KategoriGame::class, 'kategoriGame_id');
    }
}
