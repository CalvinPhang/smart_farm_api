<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActuatorTable extends Model
{
    protected $table = 'actuator_table';

    protected $fillable = [
        'actuator', 
        'value'
    ];

    public $timestamps = false;
}
