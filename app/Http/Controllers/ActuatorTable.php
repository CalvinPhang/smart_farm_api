<?php

namespace App\Http\Controllers;

use App\Models\ActuatorTable as ModelsActuatorTable;
use Illuminate\Http\Request;

class ActuatorTable extends Controller
{
    public function update($actuator, Request $request)
    {
        $data = ModelsActuatorTable::findOrFail($actuator);
        $data->update($request->all());

        return response()->json($data, 200);
    }

    public function getState($actuator)
    {
        return response()->json(ModelsActuatorTable::where('actuator',$actuator)->get());
    }
}
