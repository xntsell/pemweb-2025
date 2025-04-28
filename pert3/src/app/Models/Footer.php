<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  

class Footer extends Model
{
    use HasFactory;

    protected $table = 'footers'; // Pastikan nama tabel sesuai dengan tabel yang ada di database
    protected $fillable = [
        'footer', 
    ];
}
