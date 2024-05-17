<?php

namespace App\Http\Controllers;

use App\Models\Obligacione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObligacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $obligaciones=Obligacione::all();
        return response()->json([
            'state'=>true,
            'data'=>$obligaciones
        ],200);
    }

    public function obligacionesDocente($id){
        $obligaciones= DB::table('obligaciones')->where('obligaciones.docente_id',$id)->join('docentes','obligaciones.docente_id','=','docentes.id')->join('cargos','obligaciones.cargo_id','=','cargos.id')->join('espacios','obligaciones.espacio_id','=','espacios.id')->join('cursos','espacios.curso_id','=','cursos.id')->select('obligaciones.id as id','obligaciones.caracter','obligaciones.turno','obligaciones.horas','obligaciones.division','cursos.curso','espacios.nombre as espacio','cargos.cargo','docentes.nombres','docentes.apellidos')->get();
        
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
     
        $obligacion= DB::table('obligaciones')->where('obligaciones.id',$id)->join('docentes','obligaciones.docente_id','=','docentes.id')->join('cargos','obligaciones.cargo_id','=','cargos.id')->join('espacios','obligaciones.espacio_id','=','espacios.id')->join('cursos','espacios.curso_id','=','cursos.id')->select('obligaciones.id as id','obligaciones.caracter','obligaciones.turno','obligaciones.horas','obligaciones.dias','obligaciones.fechaAlta','obligaciones.origenVacante','obligaciones.expedienteAlta','obligaciones.numeroControl','obligaciones.cupof','obligaciones.observaciones','obligaciones.division','obligaciones.causaBaja','obligaciones.fechaBaja','obligaciones.expedienteBaja','docentes.apellidos','docentes.nombres','docentes.dni','cargos.cargo','espacios.nombre as espacio','cursos.curso')->get();
      
        return response()->json([
            'state'=>true,
            'data'=> $obligacion
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
