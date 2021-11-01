<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //use HasFactory;
    protected $fillable = ['nim','name','class', 'department', 'phone_number'];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'class_id');
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class)->withPivot('nilai');
    }
}

