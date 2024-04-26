<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    protected $fillable=['cargo'];

    public function obligaciones(){
        return $this->hasMany(Obligacione::class);
    }
}
