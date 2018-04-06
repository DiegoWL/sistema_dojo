<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{

    protected $table = 'alumno';
    public $timestamps = false;
    public function competidores(){
        return $this->belongsTo(Competidor::class);
    }

    public function examenes()
    {
        return $this->hasMany(Examen::class);
    }

}
