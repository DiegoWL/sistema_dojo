<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
     protected $table = 'examen';
     protected $fillable = [
       'fecha' , 'observacion' , 'observacion'
     ];
     public function alumno(){
        return $this->belongsTo(Alumno::class);
    }

    public function examinador(){
       return $this->belongsTo(Examinador::class);
   }

   public function grado(){
      return $this->belongsTo(Grado::class);
  }
}
