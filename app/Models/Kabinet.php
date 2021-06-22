<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabinet extends Model
{
    use HasFactory;
    protected $table = 'kabinets';
    protected $fillable = ['nama', 'presiden', 'sekjen', 'organigram', 'logo', 'filosofiLogo', 'deskripsi'];
}
