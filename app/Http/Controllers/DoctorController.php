<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Cita;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Doctor::all();
        return view('doctores.index', compact('data'));
        // return view('doctores.index', ['listado_doctores'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('doctores.ingresar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'especialidad' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'foto' => 'required'
        ]);

        Doctor::create($request->all());
        return redirect()->route('doctores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Doctor::find($id);
        $citas = Cita::where('doctor_id', $id)->get();
     
        return view('doctores.show', compact('data', 'citas'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Doctor::find($id);
        return view('doctores.editar', compact('data'));
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

        $datos = Doctor::find($id);
        $datos->update($request->all());

        return redirect()->route('doctores.index');

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
        $data = Doctor::find($id);

        if ($data) {
            $data->estado = 0; // Actualizamos el estado a 0
            $data->save(); // Guardamos los cambios en la base de datos
        }

        return redirect()->route('doctores.index')->with('success', 'El perfil del doctor ha sido desactivado.');
    }

}
