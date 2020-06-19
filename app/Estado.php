<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table='estado';
    protected $primaryKey='id';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
