<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examinador extends Model
{
    //
    protected $table = 'examinador';

    public function examen(){
        return $this->hasMany(Examen::class);
    }
}
