<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGroup extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'group_name_ua', 
        'group_name_eng',
    ];
}