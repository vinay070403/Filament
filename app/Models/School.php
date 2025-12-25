<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['state_id', 'name', 'address'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function gradeScale()
    {
        return $this->hasMany(GradeScale::class);
    }

    public function classes()
    {
        return $this->hasMany(SchoolClass::class,  'school_id', 'id');
    }                 

    protected static function booted()
    {
        static::deleting(function ($school) {

            // Delete student grades via classes
            $school->classes()->each(function ($class) {
                $class->studentGrades()->delete();
            });

            // Delete student grades via subjects
            $school->subjects()->each(function ($subject) {
                $subject->studentGrades()->delete();
            });

            // Delete gradescale ,classes & subjects 
            $school->gradeScale()->delete();
            $school->classes()->delete();
            $school->subjects()->delete();
        });
    }
}
