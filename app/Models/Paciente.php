<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $fillable = ['nombre','foto','email','telefono','direccion','estado'];

    // functin para hacer la relacion uno a muchos con citas
    public function citas(){
        return $this->hasMany(Cita::class);
    }

}
