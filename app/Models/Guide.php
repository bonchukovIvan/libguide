<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    protected $fillable = [
        'guide_title_ua',
        'guide_title_eng',
        'guide_content_ua',
        'guide_content_eng',
    ];

    public function libguide()
    {
        return $this->belongsTo(Libguide::class, 'Libguides_libguide_id');
    }
}
