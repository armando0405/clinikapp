<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = "doctores"; //esto es porque en la base de datos nosotros usamos doctores y pr el tema de ingles i l dejamos comoo esta no lo encontraria pq buscario doctors
    // tablas a guradar 
    protected $fillable = ['nombre','foto','telefono','especialidad','email', 'estado'];

    // functin para hacer la relacion uno a muchos con citas
    public function citas(){
        return $this->hasMany(Cita::class);
    }
}
