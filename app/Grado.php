<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
  public function examen(){
    return $this->hasMany(Examen::class);
  }
}
