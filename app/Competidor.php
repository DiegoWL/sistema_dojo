<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competidor extends Model
{
     protected $table = 'competidor';
         public $timestamps = false;
     public function alumno(){
        return $this->belongsTo(Alumno::class);
    }
}
