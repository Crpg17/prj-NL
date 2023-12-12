<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Humidity;

class HumidityController extends Controller
{
    public function index()
    {
        return Humidity::all();
    }

    public function store(Request $request)
    {
        $humidity = new Humidity();
        $humidity->value = $request->input('value');
        $humidity->save();

        return response()->json($humidity);
    }

    public function show(Humidity $humidity)
    {
        return $humidity;
    }

    public function update(Request $request, Humidity $humidity)
    {
        $humidity->value = $request->input('value');
        $humidity->save();

        return response()->json($humidity);
    }

    public function destroy(Humidity $humidity)
    {
        $humidity->delete();

        return response()->json(null, 204);
    }
}
