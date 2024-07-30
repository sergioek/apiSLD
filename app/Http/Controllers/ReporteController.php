<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF; // Usando el alias configurado previamente
use Carbon\Carbon;
class ReporteController extends Controller
{
    public function reporteLicencias($fechaInicio,$fechaFinal){
        $licencias = DB::table('licencias')->whereBetween('finicio',[$fechaInicio,$fechaFinal])->join('articulos','licencias.articulo_id','articulos.id')->join('obligaciones','licencias.obligacione_id','obligaciones.id')->join('cargos','obligaciones.cargo_id','cargos.id')->join('docentes','licencias.docente_id','docentes.id')->select('licencias.*','licencias.id as id', 'articulos.articulo','articulos.denominacion','articulos.descuentoPresentismo','cargos.cargo','obligaciones.numeroControl','obligaciones.caracter','obligaciones.horas','docentes.apellidos','docentes.nombres','docentes.dni','docentes.prefixCUIL','docentes.postfixCUIL')->get();

        $rows=count($licencias);   
        $rowsPerPages=11;
        $pages= ceil($rows/$rowsPerPages);

       // Establece el idioma a español
        Carbon::setLocale('es');


        // Crea un objeto Carbon
        $fecha = Carbon::createFromFormat('Y-m-d', $fechaInicio);

        // Obtiene el nombre del mes y el año
        $mes = strtoupper($fecha->translatedFormat('F')); // 'F' para el nombre completo del mes
        $año = $fecha->format('Y'); // 'Y' para el año completo (4 dígitos)

        $pdf= PDF::loadView('reportes.planillaLicencias',compact('licencias','pages','mes','año'))->setPaper('A3', 'landscape');

        // Obtener el contenido del PDF
         $pdfContent = $pdf->output();

        // Devolver la respuesta con el PDF
        return response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="document.pdf"',
        ]);
        
    }
}
