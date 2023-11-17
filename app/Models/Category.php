<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name_ua', 'category_name_eng',
    ];


    public function categoryGroup()
    {
        return $this->belongsTo(CategoryGroup::class, 'CategoryGroups_group_id');
    }
}
