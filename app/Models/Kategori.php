<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    
    protected $table = 'kategoris';
    protected $fillable = ['kategori'];

    public function ormawas(){
        return $this->hasMany(Ormawa::class, 'kategoris_id');
    }
}
