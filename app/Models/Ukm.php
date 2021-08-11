<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasFactory;

    protected $table = 'ukms';
    protected $fillable = ['pembina', 'ketuaUmum', 'tahunBerdiri', 'logo', 'filosofiLogo', 'barcode', 'ormawas_id'];

    public function ormawas(){
        return $this->belongsTo(Ormawa::class, 'ormawas_id');
    }
}
