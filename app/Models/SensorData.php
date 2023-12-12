<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class SensorData extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = [
        'sensor_type',
        'data',
    ];
}