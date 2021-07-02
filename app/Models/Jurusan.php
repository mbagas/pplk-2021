<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans';
    public $timestamps = false;
    protected $fillable = ['namaLengkap', 'namaSingkat', 'kepalaJurusan', 'ruangJurusan'];

    public function prodis(){
        return $this->hasMany(Prodi::class, 'jurusans_id');
    }
}
