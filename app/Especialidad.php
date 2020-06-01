<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidad';
    protected $primary = 'id';

    //Relación de Especialidad con Doctores
    public function doctores(){
        return $this->hasMany('App/User');
    }
}
