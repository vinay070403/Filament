<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['country_id', 'name'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function schools()
    {
        return $this->hasMany(School::class);
    }

    // Cascade delete schools when state is deleted
    protected static function booted()
    {
        static::deleting(function ($state) {
            $state->schools()->delete();
        });
    }
}
