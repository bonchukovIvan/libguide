<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name_ua', 
        'author_name_eng', 
        'author_email', 
        'author_phone', 
        'author_location_ua', 
        'author_location_eng', 
        'author_avatar_path',
    ];
}
