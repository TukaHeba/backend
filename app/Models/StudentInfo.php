<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    protected $fillable = ['student_id', 'address'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
