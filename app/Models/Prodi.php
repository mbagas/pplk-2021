<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodis';
    protected $fillable = [
        'kepalaProdi', 'akreditasi', 'tahunBerdiri', 'ruangProdi', 'jumlahMahasiswa', 'diagramAlir', 'ormawas_id', 'jurusans_id'
    ];

    public function ormawas(){
        return $this->belongsTo(Ormawa::class, 'ormawas_id');
    }
    public function jurusans(){
        return $this->belongsTo(Jurusan::class, 'jurusans_id');
    }

}
