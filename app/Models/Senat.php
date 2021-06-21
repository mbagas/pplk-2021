<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senat extends Model
{
    use HasFactory;
    protected $table = 'senats';
    protected $fillable = ['ketua', 'deskripsi', 'website', 'youtube', 'instagram'];
}
