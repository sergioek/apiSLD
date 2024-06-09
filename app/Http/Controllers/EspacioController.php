<?php

namespace App\Http\Controllers;

use App\Models\Espacio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EspacioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $espacios=DB::table("espacios")->join("cursos","espacios.curso_id","=","cursos.id")->select("espacios.id as id","espacios.nombre","cursos.curso","cursos.ciclo","cursos.carrera")->get();


        return response()->json([
            'state'=>true,
            'data'=>$espacios
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Espacio $espacio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Espacio $espacio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Espacio $espacio)
    {
        //
    }
}
