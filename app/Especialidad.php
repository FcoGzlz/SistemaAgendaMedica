<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidad';
    protected $primaryKey = 'id';

    public function doctor(){
        return $this->hasManyThrough('App\User', 'App\DoctorEspecialidad', 'id_especialidad' , 'id', 'id_doctor', 'id');
    }
}
