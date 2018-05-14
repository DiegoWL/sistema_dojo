<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{

    protected $table = 'alumno';
    protected $fillable = [ 'id',
        'rut', 'nombre', 'apellido','sexo','fecha_nac','direccion','actividad','telefono','fono_emerg','email','apoderado','fecha_ingreso','observacion'];
    public $timestamps = false;

    public function competidores(){
        return $this->belongsTo(Competidor::class);
    }

    
    public function clase(){
        return $this->belongsToMany(Clase::class,'alumno_clase');
    }
    public function examenes()
    {
        return $this->hasMany(Examen::class);
    }

    public function pago(){
      return $this->hasMany(Pago::class);
    }


}
