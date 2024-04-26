<?php

namespace App\Http\Controllers;

use App\Models\Obligacione;
use Illuminate\Http\Request;

class ObligacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obligaciones=Obligacione::paginate(10);
        return response()->json([
            'state'=>true,
            'data'=>$obligaciones
        ],200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'caracter'=>'required|string|max:10',
            'turno'=>'required|string|max:1',
            'horas'=>'integer',
            'dias'=>'required|json',
            'fechaAlta'=>'required|date',
            'origenVacante'=>'required|string|max:500',
            'expedienteAlta'=>'required|string|max:100',
            'numeroControl'=>'required|string|max:50',
            'cupof'=>'required|string|max:250',
            'observaciones'=>'string|max:500',
            'division'=>'string|max:1',
            'causaBaja'=>'string|max:100',
            'fechaBaja'=>'date',
            'expedienteBaja'=>'string|max:100',
            'docente_id'=>'required|integer|exists:docentes,id',
            'cargo_id'=>'required|integer|exists:cargos,id',
            'espacio_id'=>'integer|exists:espacios,id',
        ]);

        Obligacione::create($request->all());
        
        return response()->json([
            'state'=>true
        ],200);
    
    }


    public function show($id)
    {
        $obligacion=Obligacione::findOrFail($id);
        return response()->json([
            'state'=>true,
            'data'=>$obligacion
        ],200);
    
    }


    public function update(Request $request,$id)
    {
        $obligacion=Obligacione::findOrFail($id);

        $request->validate([
            'caracter'=>'required|string|max:10',
            'turno'=>'required|string|max:1',
            'caracter'=>'required|string|max:10',
            'turno'=>'required|string|max:1',
            'horas'=>'integer',
            'dias'=>'required|json',
            'fechaAlta'=>'required|date',
            'origenVacante'=>'required|string|max:500',
            'expedienteAlta'=>'required|string|max:100',
            'numeroControl'=>'required|string|max:50',
            'cupof'=>'required|string|max:250',
            'observaciones'=>'string|max:500',
            'division'=>'string|max:1',
            'causaBaja'=>'string|max:100',
            'fechaBaja'=>'date',
            'expedienteBaja'=>'string|max:100',
            'docente_id'=>'required|integer|exists:docentes,id',
            'cargo_id'=>'required|integer|exists:cargos,id',
            'espacio_id'=>'integer|exists:espacios,id',
        ]);

        $obligacion->update($request->all());

        return response()->json([
            'state'=>true
        ],200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obligacione $obligacione)
    {
        $obligacione->delete();
        return response()->json([
            'state'=>true
        ],200);
    }
}
