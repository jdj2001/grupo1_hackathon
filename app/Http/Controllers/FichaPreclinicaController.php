<?php

namespace App\Http\Controllers;
use App\Models\FichaPreclinica;
use App\Models\Paciente; 


use Illuminate\Http\Request;

class FichaPreclinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fichaPreclinicas = FichaPreclinica::with('paciente')->get();
        return view('ficha-preclinica.index', compact('fichaPreclinicas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = \App\Models\Paciente::all();
        return view('ficha-preclinica.create', compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'presion_arterial' => 'nullable|string|max:255',
            'peso' => 'nullable|numeric',
            'observaciones' => 'nullable|string',
        ]);

        FichaPreclinica::create([
            'paciente_id' => $request->paciente_id,
            'usuario_id' => auth()->id(),
            'fecha' => now(),
            'presion_arterial' => $request->presion_arterial,
            'peso' => $request->peso,
            'observaciones' => $request->observaciones,
        ]);

        return redirect()->route('ficha-preclinicas.index')->with('success', 'Ficha guardada correctamente');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('ficha-preclinica.edit', compact('fichaPreclinica'));
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
