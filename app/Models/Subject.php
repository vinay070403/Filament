<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'school_id',
        'name',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function studentGrades()
    {
        return $this->hasMany(StudentGrade::class, 'subject_id');
    }
}
