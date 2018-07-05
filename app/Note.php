<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'title',
        'note-body',
        'project_id',
        'addedFrom_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
