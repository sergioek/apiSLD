<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obligacione extends Model
{
    use HasFactory;

    protected $fillable=[
        'caracter',
        'turno',
        'horas',
        'dias',
        'origenVacante',
        'expedienteAlta',
        'fechaAlta',
        'numeroControl',
        'cupof',
        'observaciones',
        'division',
        'causaBaja',
        'fechaBaja',
        'expedienteBaja',
        'docente_id',
        'cargo_id',
        'espacio_id'
    ];

    public function docente(){
        return $this->belongsTo(Docente::class);
    }

    public function licencia(){
        return $this->hasMany(Licencia::class);
    }

    public function cargo(){
        return $this->belongsTo(Cargo::class);
    }

    public function espacio(){
        return $this->belongsTo(Espacio::class);
    }
}
