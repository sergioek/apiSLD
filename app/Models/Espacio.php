<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    use HasFactory;

    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    public function obligacione(){
        return $this->hasMany(Obligacione::class);
    }
}
