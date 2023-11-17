<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libguide extends Model
{
    use HasFactory;

    protected $fillable = [
        'libguide_title_ua',
        'libguide_title_eng',
        'libguide_desc_ua',
        'libguide_desc_eng',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'Categories_category_id');
    }
}
