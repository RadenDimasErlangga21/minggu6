<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['course_name', 'sks', 'semester'];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
