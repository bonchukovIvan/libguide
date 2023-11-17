<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;

    protected $fillable = [
        'knowledge_title', 
        'knowledge_desc_ua', 
        'knowledge_desc_eng', 
    ];

    public function accessType()
    {
        return $this->belongsTo(AccessType::class, 'AccessTypes_type_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'Subjects_subject_id');
    }
}
