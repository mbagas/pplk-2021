<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FindCode extends Model
{
    use HasFactory;
    protected $table = 'find_codes';
    protected $fillable = ['games_id','gambar','nama','code'];

    public function games(){
        return $this->belongsTo(Game::class, 'games_id');
    }

}
