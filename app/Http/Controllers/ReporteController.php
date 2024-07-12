<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF; // Usando el alias configurado previamente

class ReporteController extends Controller
{
    public function reporteLicencias($fechaInicio,$fechaFinal){
        $licencias = DB::table('licencias')->whereBetween('finicio',[$fechaInicio,$fechaFinal])->join('articulos','licencias.articulo_id','articulos.id')->join('obligaciones','licencias.obligacione_id','obligaciones.id')->join('cargos','obligaciones.cargo_id','cargos.id')->join('docentes','licencias.docente_id','docentes.id')->select('licencias.*','licencias.id as id', 'articulos.articulo','articulos.denominacion','articulos.descuentoPresentismo','cargos.cargo','obligaciones.numeroControl','obligaciones.caracter','docentes.apellidos','docentes.nombres','docentes.dni','docentes.prefixCUIL','docentes.postfixCUIL')->get();

        $pdf= PDF::loadView('reportes.planillaLicencias',['licencias' => $licencias])->setPaper('A3', 'landscape');

        return $pdf->download('planillaA2.pdf');
        
    }
}
