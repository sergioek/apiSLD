<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    // Dentro de tu modelo
    protected $primaryKey = 'id';
    protected $fillable=[
        'apellidos',
        'nombres',
        'dni',
        'prefixCUIL',
        'postfixCUIL',
        'fnacimiento',
        'lnacimiento',
        'domicilio',
        'direccion',
        'estadoCivil',
        'finicioDocencia',
        'titulo1',
        'titulo2',
        'email',
        'tel'
    ];

    public function obligacion(){
        return $this->hasMany(Obligacione::class);
    }
}
