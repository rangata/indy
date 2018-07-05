<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'phone',
        'email'
    ];


    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
