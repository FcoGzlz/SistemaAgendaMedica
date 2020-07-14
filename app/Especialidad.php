<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidad';
    protected $primaryKey = 'id';

    public function doctores(){
        return $this->hasManyThrough('App\User', 'App\DoctorEspecialidad', 'id_especialidad' , 'id', 'id', 'id_doctor');
    }

}
