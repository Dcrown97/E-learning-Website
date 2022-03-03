<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
   protected $table = 'payments';
   protected $fillable = [
        'user_id',
        'course_id',
        'status',
        'amount_paid',
        'instructor_id',
        'ref'
   ];

   public function paid_course()
   {
      return $this->belongsTo(course::class, "course_id");
   }
   public function paid_student()
   {
      return $this->belongsTo(User::class, "student_id");
   }
   public function paid_instructor()
   {
      return $this->belongsTo(User::class, "instructor_id");
   }
}
