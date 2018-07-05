<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //

    public function project()
    {
        return $this->belongsToMany(Project::class);
    }
}
