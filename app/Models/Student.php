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

    public function profile()
    {
        return $this->hasOne(StudentInfo::class);
    }
    public function classes()
    {
        return $this->hasOne(StudentInfo::class);
    }
}
