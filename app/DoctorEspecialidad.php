<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorEspecialidad extends Model
{
    protected $table = 'doctor_especialidad';
    protected $primaryKey = 'id';

    // public function doctor(){
    //     return $this->belongsTo('App\User', 'id');
    // }

    // public function especialidad(){
    //     return $this->belongsTo('App\Especialidad', 'id_e');
    // }
}
