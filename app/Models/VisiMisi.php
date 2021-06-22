<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;
    protected $table = 'visi_misis';
    protected $fillable = ['visi', 'misi', 'ormawas_id'];

    public function ormawas(){
        return $this->belongsTo(Ormawa::class, 'ormawas_id');
    }
}
