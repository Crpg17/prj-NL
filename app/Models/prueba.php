<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\mongodb\Eloquent\Model;

class prueba extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'pruebas_collection';
}
