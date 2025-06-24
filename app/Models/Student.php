<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name'];

    public function courses()
    {
        return $this->belngsTo(Course::class);
    }

    public function profile1()
    {
        return $this->hasOne(StudentInfo::class);
    }
    public function profile2()
    {
        return $this->hasOne(StudentInfo::class);
    }
    public function profile3()
    {
        return $this->hasOne(StudentInfo::class);
    }
}