<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funfact extends Model
{
    use HasFactory;

    protected $table = 'funfacts';
    protected $fillable = ['body'];
}
