<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentProject extends Model
{
    protected $fillable = [
        'equipment_id',
        'project_id'
    ];
}
