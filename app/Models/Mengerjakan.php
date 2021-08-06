<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mengerjakan extends Model
{
    use HasFactory;
    protected $table = 'mengerjakans';
    protected $fillable = ['file', 'jawaban', 'nilai', 'status', 'users_id', 'tugas_id', 'kelompok'];

    public function tugas(){
        return $this->belongsTo(Tugas::class, 'tugas_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'users_id');
    }
}
