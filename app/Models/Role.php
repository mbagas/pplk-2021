<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = ['id','role'];

    public function ormawas(){
        return $this->belongsTo(Ormawa::class, 'ormawas_id');
    }
}
