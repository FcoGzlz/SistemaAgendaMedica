<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'cita';
    protected $primaryKey = 'id';

   protected $fillable = [
        'id_paciente',
        'id_cupo',
        'id_estado'
   ];

   public function paciente(){
       return $this->belongsTo('App\User', 'id_paciente');
   }

   public function cupo(){
       return $this->hasOne('App\Cupo', 'id', 'id_cupo');
   }


}
