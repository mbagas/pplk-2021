<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    use HasFactory;
    protected $table = 'ormawas';
    protected $fillable = [
        'namaLengkap', 'namaSingkatan', 'kategoris_id'
    ];

    public function kategoris(){
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

    public function prodis(){
        return $this->hasOne(Prodi::class, 'ormawas_id');
    }

}
