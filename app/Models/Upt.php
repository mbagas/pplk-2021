<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upt extends Model
{
    use HasFactory;
    protected $table = 'upts';
    protected $fillable = ['nama', 'deskripsi'];
}
