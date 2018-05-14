<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';

    public function pago(){
        return $this->hasMany(Pago::class);
    }
}
