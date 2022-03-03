<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'trending'
    ];


    public function courses()
    {
        return $this->hasMany(course::class, "category");
    }
}
