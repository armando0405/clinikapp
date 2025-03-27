<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    // tablas a guradar 
    protected $fillable = ['numero','nivel','estado'];

    // functin para hacer la relacion uno a muchos con citas
    public function citas(){
        return $this->hasMany(Cita::class);
    }
}
