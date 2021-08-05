<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FindCode extends Model
{
    use HasFactory;
    protected $table = 'find_codes';
    protected $fillable = ['game_id','gambar','code'];

    public function games(){
        return $this->belongsTo(games::class, 'id');
    }

}
