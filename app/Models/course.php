<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
   protected $table = 'courses';
   protected $fillable = [
      'title',
      'description',
      'language',
      'price',
      'duration',
      'user_id',
      'category',
      'featured'
   ];


   public function user()
   {
      return $this->belongsTo(User::class, 'user_id');
   }

   public function cat()
   {
      return $this->belongsTo(category::class, "category",'id');
   }

   public function lessons()
   {
      return $this->hasMany(Lesson::class, "course_id");
   }

}
