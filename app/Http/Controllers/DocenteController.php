<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DocenteController extends Controller
{
   
    public function index()
    {
        $docentes=Docente::orderBy('apellidos','ASC')->paginate(8);
        return response()->json([
            'state'=>true,
            'data'=>$docentes,
        ],200);
    }

    public function search($value){
        $docentes=Docente::where('apellidos','like','%'.$value.'%')->orWhere('nombres','like','%'.$value.'%')->orWhere('dni','like','%'.$value.'%')->paginate(8);
        
        return response()->json([
            'state'=>true,
            'data'=>$docentes,
        ],200);

    }

  
    public function store(Request  $request)
    {
        $request->validate([
            'apellidos'=>'required|string|max:100',
            'nombres'=>'required|string|max:100',
            'dni'=>'required|integer|digits_between:8,9|unique:docentes',
            'prefixCUIL'=>'required|integer|min:0|max:99',
            'postfixCUIL'=>'required|integer|min:0|max:9',
            'lnacimiento'=>'required|string|max:100',
            'fnacimiento'=>'required|date',
            'domicilio'=>'required|string|max:100',
            'direccion'=>'required|string|max:100',
            'estadoCivil'=>'required|string|max:100',
            'finicioDocencia'=>'required|date',
            'titulo1'=>'required|string|max:300',
            'titulo2'=>'string|max:300',
            'email'=>'required|email',
            'tel'=>'required|string|max:100',
        ]);
        
        
        Docente::create($request->all());
            return response()->json([
                'state'=>true
            ],200);
    }


    public function show($id)
    {
        $docente=Docente::findOrFail($id);
  
        return response()->json([
            'state'=>true,
            'data'=>$docente
        ],200);
    }


    public function update(Request $request, $id)
    {
        
        $docente = Docente::findOrFail($id);
        
        $request->validate([
            'apellidos'=>'required|string|max:100',
            'nombres'=>'required|string|max:100',
            'dni'=>'required|integer|digits_between:8,9|unique:docentes,dni,'.$docente->id,
            'prefixCUIL'=>'required|integer|min:0|max:99',
            'postfixCUIL'=>'required|integer|min:0|max:9',
            'lnacimiento'=>'required|string|max:100',
            'fnacimiento'=>'required|date',
            'domicilio'=>'required|string|max:100',
            'direccion'=>'required|string|max:100',
            'estadoCivil'=>'required|string|max:100',
            'finicioDocencia'=>'required|date',
            'titulo1'=>'required|string|max:300',
            'titulo2'=>'string|max:300',
            'email'=>'required|email',
            'tel'=>'required|string|max:100',
        ]);
        
        $docente->update($request->all());
        
        return response()->json([
            'state'=>true
        ],200);
    }

   
    public function destroy(Docente $docente)
    {
        $docente->delete();

        return response()->json([
            'state'=>true
        ],200);
    }
}
