<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentGrade extends Model
{
    protected $fillable = ['student_id', 'country_id', 'state_id', 'school_id', 'class_id', 'subject_id', 'grade_id'];

    protected $casts = [
        'subject_id' => 'array', // Fixes the "Array to string" error
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function SchoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function gradeScale()
    {
        return $this->belongsTo(GradeScale::class, 'grade_id');
    }
}


// based on this both file we need to create new page in student -->pages in --> grades where you need to first create assign school first then class and then subject and then grade scale and then you can assign grade to student.

// also clear one more think is if you assign school then you cant change school. because student is already assigned to that school. so first create school then class and subject and grade scale and then assign grade to student.

// for school assign step is seelct country then state then school. and its just dropdown select. and then save. and you cant change it later.

// after assign school you just show school name there and class select dropdown and subject select dropdown and grade scale select dropdown and then save grade to student.

// and also mention one more thing is class and subject show which school are related ready with school.

// one class select then after show subject related to that class only.

//Example:
// School: london school1
// Class: 11
// maths
// A
// 90-100 
// ------> how look like row in student grade page

// it means you can also show range in grade scale like A 90-100, B 80-89 etc.

// class and subject both are related to school. so when you select school then class dropdown show related class only and subject dropdown show related subject only.

// also in grade scale show related school only.

//class in we create subject ---> grade (A)  ----> min score (90) ----> max score (100) ----> grade point (4.0)  this type row we need 

// and also there subject add button because us ecan create multiple subject for one class in one section. because you can delete this class then those subject and student garde also delete. you dont need to delete manually. it should be cascade delete.

// you can also delete manually from student grade page.ok 

// upper side you can create button where you can show create  class but also there condition you can not use same class name for same school. because school class should be unique for one school also subject should be unique for one class in one school. so you need to check before create class and subject

