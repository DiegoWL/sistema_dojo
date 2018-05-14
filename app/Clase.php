<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{

  protected $table = 'clase';
  protected $fillable = ['nombre' , 'horario'];
  public $timestamps = false;
  
   public function alumno(){
        return $this->belongsToMany(Alumno::class,'alumno_clase');
    }
}
