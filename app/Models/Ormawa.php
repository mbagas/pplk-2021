<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    use HasFactory;
    protected $table = 'ormawas';
    protected $fillable = [
        'id', 'namaLengkap', 'namaSingkat', 'kategoris_id'
    ];

    public function kategoris(){
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

    public function artikels(){
        return $this->hasOne(Artikel::class, 'ormawas_id');
    }

    public function socialmedias(){
        return $this->hasOne(SocialMedia::class, 'ormawas_id');
    }

    public function visimisis(){
        return $this->hasOne(VisiMisi::class, 'ormawas_id');
    }

    public function prodis(){
        return $this->hasOne(Prodi::class, 'ormawas_id');
    }

    public function ukms(){
        return $this->hasOne(Ukm::class, 'ormawas_id');
    }

    public function himpunans(){
        return $this->hasOne(Himpunan::class, 'ormawas_id');
    }

}
