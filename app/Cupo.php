<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupo extends Model
{
    protected $table = 'cupo';
    protected $primaryKey = 'id';

    public function cita(){
        return $this->belongsTo('App\Cita');
    }

    public function doctor(){
        return $this->belongsTo('App\User', 'id_doctor');
    }
}
