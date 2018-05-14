<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoClase extends Model
{     
      protected $table = 'alumno_clase';
      protected $fillable = ['clase_id', 'alumno_id'];
      public $timestamps = false;
}
