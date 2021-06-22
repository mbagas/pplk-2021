<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamusgaul extends Model
{
    use HasFactory;
    protected $table = 'kamusgauls';
    protected $fillable = ['gaul', 'asli'];
}
