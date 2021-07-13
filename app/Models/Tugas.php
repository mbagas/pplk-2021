<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';
    protected $fillable = ['judul', 'deskripsi', 'format', 'file', 'icon', 'start_time', 'end_time'];

    public function mengerjakans(){
        return $this->hasMany(Mengerjakan::class, 'tugas_id');
    }

    public function parameters(){
        return $this->hasMany(Parameter::class, 'tugas_id');
    }
}
