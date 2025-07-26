<?php

namespace App\Http\Controllers;
use App\Models\Multimedia;

use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $multimedias = Multimedia::with('paciente')->get();
        return view('multimedias.index', compact('multimedias'));
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'tipo' => 'required|string',
            'archivo' => 'required|file',
        ]);

        $path = $request->file('archivo')->store('multimedia', 'public');

        \App\Models\Multimedia::create([
            'paciente_id' => $request->paciente_id,
            'tipo' => $request->tipo,
            'ruta' => $path,
        ]);

        return redirect()->route('multimedias.index')->with('success', 'Archivo multimedia guardado.');
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
