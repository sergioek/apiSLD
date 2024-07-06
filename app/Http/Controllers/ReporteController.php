<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function reporteLicencias($fechaInicio,$fechaFinal){
        $reporte = DB::table('licencias')->whereBetween('finicio',[$fechaInicio,$fechaFinal])->join('articulos','licencias.articulo_id','articulos.id')->join('obligaciones','licencias.obligacione_id','obligaciones.id')->join('cargos','obligaciones.cargo_id','cargos.id')->join('docentes','licencias.docente_id','docentes.id')->select('licencias.*','licencias.id as id', 'articulos.articulo','articulos.denominacion','articulos.descuentoPresentismo','cargos.cargo','obligaciones.numeroControl','obligaciones.caracter','docentes.apellidos','docentes.nombres','docentes.dni','docentes.prefixCUIL','docentes.postfixCUIL')->get();

        return response()->json([
            'state'=>true,
            'data'=>$reporte
        ],200);
    }
}
