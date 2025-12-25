<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    protected $fillable = ['id', 'school_id', 'name', 'description'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function studentGrades()
    {
        return $this->hasMany(StudentGrade::class, 'class_id');
    }

    // Cascade delete student grades when class is deleted
    protected static function booted()
    {
        static::deleting(function ($schoolClass) {
            $schoolClass->studentGrades()->delete();
        });
    }
}
