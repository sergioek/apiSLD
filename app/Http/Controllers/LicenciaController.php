<?php

namespace App\Http\Controllers;

use App\Models\Licencia;
use Illuminate\Http\Request;

class LicenciaController extends Controller
{
   
    public function index()
    {
        $licencias=Licencia::paginate(10);
        return response()->json([
            'state'=>true,
            'data'=>$licencias
        ],200);
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'finicio'=>'required|date',
            'ffinal'=>'date',
            'dias'=>'required|integer',
            'obligacionesAfectadas'=>'integer',
            'injustificada'=>'required|string',
            'documentacion'=>'required|string',
            'observaciones'=>'string',
            'articulo_id'=>'required|integer|exists:articulos,id',
            'obligacione_id'=>'required|integer|exists:obligaciones,id',
        ]);

        Licencia::create($request->all());

        return response()->json([
            'state'=>true,
        ],200);
    }

  
    public function show($id)
    {
        $licencia=Licencia::find($id);
        return response()->json([
            'state'=>true,
            'data'=>$licencia
        ],200);
    }

    public function update(Request $request, $id)
    {
        $licencia=Licencia::findOrFail($id);

        $request->validate([
            'finicio'=>'required|date',
            'ffinal'=>'date',
            'dias'=>'required|integer',
            'obligacionesAfectadas'=>'integer',
            'injustificada'=>'required|string',
            'documentacion'=>'required|string',
            'observaciones'=>'string',
            'articulo_id'=>'required|integer|exists:articulos,id',
            'obligacione_id'=>'required|integer|exists:obligaciones,id',
        ]);

        $licencia->update($request->all());
        return response()->json([
            'state'=>true,
        ],200);

    }


    public function destroy(Licencia $licencia)
    {
        $licencia->delete();
        return response()->json([
            'state'=>true,
        ],200);
    }
}
