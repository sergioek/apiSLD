<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;

    protected $fillable=[
        'finicio',
        'ffinal',
        'dias',
        'obligacionesAfectadas',
        'injustificada',
        'documentacion',
        'observaciones',
        'articulo_id',
        'obligacione_id',
        'totalHaberes',
        'docente_id',
        'expediente'
    ];

    public function articulo(){
        return $this->belongsTo(Articulo::class);
    }

    public function obligacion(){
        return $this->belongsTo(Obligacione::class);
    }
}
