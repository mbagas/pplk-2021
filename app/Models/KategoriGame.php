<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGame extends Model
{
    use HasFactory;

    protected $table = 'kategori_games';
    protected $fillable = ['kategori'];

    public function game(){
        return $this->hasMany(game::class, 'kategoriGame_id');
    }
}
