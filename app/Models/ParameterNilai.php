<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParameterNilai extends Model
{
    use HasFactory;

    protected $table = 'parameter_nilais';
    protected $fillable = ['nama', 'persen', 'tugas_id'];

    public function tugas(){
        return $this->belongsTo(Tugas::class, 'tugas_id');
    }
}
