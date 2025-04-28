<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageConfig extends Model
{
    use HasFactory;
    protected $table = 'page_configs'; // Pastikan nama tabel sesuai dengan tabel yang ada di database
    protected $fillable = [
        'title',
        'detail',
        'image',
    ];
}
