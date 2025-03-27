<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //
    protected $fillable = ['fecha','hora','diagnostico','tratamiento','doctor_id','paciente_id','consultorio_id', 'estado'];
    
    public function paciente(){
        return  $this->belongsTo(Paciente::class); //belongsTo = le pertenece a un paciente
    }

    public function doctor(){
        return  $this->belongsTo(Doctor::class); //belongsTo = le pertenece a un paciente
    }

    public function consultorio(){
        return  $this->belongsTo(Consultorio::class); //belongsTo = le pertenece a un paciente
    }
}
