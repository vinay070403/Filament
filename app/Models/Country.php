<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    // Relation: a country has many states
    public function states()
    {
        return $this->hasMany(State::class);
    }

    // Cascade delete states when country is deleted
    protected static function booted()
    {
        static::deleting(function ($country) {

            // Loop through states
            $country->states()->each(function ($state) {

                // Loop through schools under each state
                $state->schools()->each(function ($school) {

                    // Delete all classes in this school
                    $school->classes()->delete();

                    // Delete all subjects in this school
                    $school->subjects()->delete();
                });

                // Delete all schools after deleting classes + subjects
                $state->schools()->delete();
            });

            // Finally delete states
            $country->states()->delete();
        });
    }
}
