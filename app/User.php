<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres', 'rut', 'apellidoPaterno', 'apellidoMaterno', 'genero', 'telefono', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'correo_verificado' => 'datetime',
    ];

    public function citas(){
        return $this->hasMany('App\Cita', 'id_paciente');
    }

    public function cupos(){
        return $this->hasMany('App\Cupo', 'id_doctor');
    }

    public function especialidad(){
        return $this->hasOneThrough('App\Especialidad', 'App\DoctorEspecialidad', 'id_doctor', 'id', 'id' , 'id_especialidad');
    }
    //SCOPES

    public function scopeRut($query, $rut ){
        if ($rut) {
            return $query->where('rut', 'LIKE', "%$rut%" );
        }
    }

    public function scopeNombres($query, $nombres ){
        if ($nombres) {
            return $query->where('nombres', 'LIKE', "%$nombres%" );
        }
    }


}
