<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Paciente;
use App\Models\Doctor;
use App\Models\Consultorio;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Cita::all();
        return view('citas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $data = Cita::all();
        // Obtener las listas de datos relacionados
        $doctores = Doctor::where('estado', 1)->get();
        $pacientes = Paciente::where('estado', 1)->get();
        $consultorios = Consultorio::where('estado', 1)->get();


        return view('citas.ingresar', compact('doctores', 'pacientes', 'consultorios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());

        $request->validate([
            'paciente_id' => 'required',
            'consultorio_id' => 'required',
            'doctor_id' => 'required'
        ]);

        Cita::create($request->all());
        return redirect()->route('citas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Cita::find($id);
        return view('citas.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cita = Cita::with(['paciente', 'doctor', 'consultorio'])->findOrFail($id);

        // Obtener las listas de datos relacionados
        $doctores = Doctor::where('estado', 1)->get();
        $pacientes = Paciente::where('estado', 1)->get();
        $consultorios = Consultorio::where('estado', 1)->get();
    
        // Retornar la vista con los datos
        return view('citas.editar', compact('cita', 'doctores', 'pacientes', 'consultorios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cita = Cita::findOrFail($id);
        $cita->update($request->all());
        
        return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function desactivacion(string $id)
    {
        $data = Cita::find($id);

        if ($data) {
            $data->estado = 0; // Actualizamos el estado a 0
            $data->save(); // Guardamos los cambios en la base de datos
        }

        return redirect()->route('citas.index')->with('success', 'El paciente del doctor ha sido desactivado.');

    }
}
