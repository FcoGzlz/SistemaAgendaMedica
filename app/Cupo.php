<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupo extends Model
{
    protected $table = 'cupo';
    protected $primaryKey = 'id';

    

    //Scope
    public function scopeEspecialidad($query, $especialidad){
        if ($especialidad) {
            return $query->where('id_especialidad', '=', "$especialidad");
        }
    }
}
