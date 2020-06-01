<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table='estado';
    protected $primaryKey='id';


    //Relación de Estado con Cita
    public function cita(){
        return $this->belongsTo('App/Cita');
    }

    //Relación de Estado con Cupo
    public function cupo(){
        return $this->belongsTo('App/Cupo');
    }
}
