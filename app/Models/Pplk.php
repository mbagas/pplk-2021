<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pplk extends Model
{
    use HasFactory;
    protected $table = 'pplks';
    protected $fillable = ['logo', 'visi', 'misi'];
}
