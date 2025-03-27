<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Cita;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Paciente::all();
        return view('pacientes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pacientes.ingresar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'foto' => 'required'
        ]);

        Paciente::create($request->all());
        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Paciente::find($id);
        $citas = Cita::where('paciente_id', $id)->get();
        return view('pacientes.show', compact('data', 'citas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Paciente::find($id);
        return view('pacientes.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'especialidad' => 'required',
            'telefono' => 'required',
            'email' => 'required'
        ]);

        $datos = Paciente::find($id);
        $datos->update($request->all());

        return redirect()->route('pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         
    }

        // FUNCTION PARA ACTUALIZAR EL ESTADO DE 0 A 1 EN LA BASE DE DATOS
        public function desactivate(string $id)
        {
            $data = Paciente::find($id);
    
            if ($data) {
                $data->estado = 0; // Actualizamos el estado a 0
                $data->save(); // Guardamos los cambios en la base de datos
            }
    
            return redirect()->route('pacientes.index')->with('success', 'El paciente del doctor ha sido desactivado.');
        }

        public function historialpaciente(string $id)
        {
            //
            $data = Paciente::find($id);
            $citas = Cita::where('paciente_id', $id)->get();
            return view('pacientes.historialpaciente', compact('data', 'citas'));
        }
}
