<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
      protected $table = 'pago';

      protected $fillable = ['fecha' , 'estado' , 'concepto','comentario','alumno_id' . 'evento_id' ];
      public $timestamps = false;

      
      public function alumno(){
         return $this->belongsTo(Alumno::class);
     }
}
