<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    protected $table = 'social_medias';
    protected $fillable = ['website', 'instagram', 'youtube', 'ormawas_id'];

    public function ormawas(){
        return $this->belongsTo(Ormawa::class, 'ormawas_id');
    }

}
