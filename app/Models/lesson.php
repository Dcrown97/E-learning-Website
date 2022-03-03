<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    protected $table = 'lessons';
    protected $fillable = [
        'title',
        'video_link',
        'user_id',
        'course_id',
        'module_id',
    ];

    public function relatedModules()
    {
        return $this->belongsTo(module::class, "module_id");
    }
}
