<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use App\Models\Cita;
use Illuminate\Http\Request;

class ConsultorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Consultorio::all();
        return view('consultorios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('consultorios.ingresar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'numero' => 'required',
            'nivel' => 'required'
        ]);

        Consultorio::create($request->all());
        return redirect()->route('consultorios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
                    
        $data = Consultorio::find($id);
        $citas = Cita::where('paciente_id', $id)->get();
        return view('consultorios.show', compact('data', 'citas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
