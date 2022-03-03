<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    protected $table = 'modules';
    protected $fillable = [
        'title',
        'user_id',
        'course_id'
    ];

    public function relatedCourses()
    {

        return $this->belongsTo(course::class, "course_id");
    }

    public function relatedLessons()
    {
        return $this->hasMany(Lesson::class, "module_id");
    }
}
