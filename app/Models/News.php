<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal berita', 'title', 'content', 'status', 'user_input', 'user_update',
        'tanggal_update'
    ];
}
