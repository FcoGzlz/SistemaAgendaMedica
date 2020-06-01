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
}
