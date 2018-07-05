<?php

namespace App;

use Faker\Provider\Person;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'title',
        'location',
        'personInCharge',
        'startFrom',
        'status',
        'progress',
        'ending'
    ];

    public function equipment()
    {
        return $this->belongsToMany(Equipment::class);
    }

    public function persons()
    {
        return $this->belongsToMany(Persons::class,'person_project');
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
