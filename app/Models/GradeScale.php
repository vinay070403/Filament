<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GradeScale extends Model
{
    protected $fillable = ['school_id', 'grade', 'min_score', 'max_score', 'grade_point'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function studentGrades()
    {
        return $this->hasMany(StudentGrade::class, 'grade_id');
    }
}



//based on this both based we ned to create page new page in filament version 4 in student