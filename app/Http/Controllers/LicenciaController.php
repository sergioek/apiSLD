<?php

namespace App\Http\Controllers;

use App\Models\Licencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LicenciaController extends Controller
{
   
    public function index($id)
    {
        $licencias=DB::table('licencias')->where('licencias.docente_id',$id)->join('articulos','licencias.articulo_id','articulos.id')->join('obligaciones','licencias.obligacione_id','obligaciones.id')->join('cargos','obligaciones.cargo_id','cargos.id')->select('licencias.*','licencias.id as id', 'articulos.articulo','articulos.denominacion','articulos.descuentoPresentismo','cargos.cargo','obligaciones.numeroControl','obligaciones.caracter')->paginate(8);

        return response()->json([
            'state'=>true,
            'data'=>$licencias
        ],200);


    }

    public function search ($idDocente,$desdeFecha,$hastaFecha){

        $licencias=DB::table('licencias')->where('licencias.docente_id',$idDocente)->whereBetween('finicio',[$desdeFecha,$hastaFecha])->join('articulos','licencias.articulo_id','articulos.id')->join('obligaciones','licencias.obligacione_id','obligaciones.id')->join('cargos','obligaciones.cargo_id','cargos.id')->select('licencias.*','licencias.id as id', 'articulos.articulo','articulos.denominacion','articulos.descuentoPresentismo','cargos.cargo','obligaciones.numeroControl','obligaciones.caracter')->paginate(8);

        return response()->json([
            'state'=>true,
            'data'=>$licencias
        ],200);
    

    }

   
    public function store(Request $request)
    {
        $request->validate([
            'finicio'=>'required|date',
            'ffinal'=>'required|date',
            'dias'=>'required|integer',
            'obligacionesAfectadas'=>'integer|nullable',
            'injustificada'=>'required|string',
            'documentacion'=>'required|string',
            'totalHaberes'=>'required|string',
            'observaciones'=>'string|nullable',
            'expediente'=>'string|nullable',
            'articulo_id'=>'required|integer|exists:articulos,id',
            'obligacione_id'=>'required|integer|exists:obligaciones,id',
            'docente_id'=>'required|integer|exists:docentes,id',
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
