<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TebakGedung extends Model
{
    use HasFactory;
    protected $table = 'tebak_gedungs';
    protected $fillable = ['games_id','gambar','pil1','pil2','pil3','pil4','jawaban'];

    public function games(){
        return $this->belongsTo(Game::class, 'games_id');
    }

}
