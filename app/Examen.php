<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
     protected $table = 'alumno';

    public function alumno(){
        return $this->hasMany(Alumno::class);
    }
}
