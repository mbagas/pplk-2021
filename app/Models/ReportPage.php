<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportPage extends Model
{
    use HasFactory;
    protected $table = 'report_pages';
    protected $fillable = ['nama', 'nim', 'kontak', 'instagram', 'kritikSaran'];
    
}
