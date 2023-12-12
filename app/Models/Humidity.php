<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Humidity extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'humidity';

        protected $fillable = [
            'sensor_type',
            'data',
        ];
}