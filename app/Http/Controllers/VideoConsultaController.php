<?php

namespace App\Http\Controllers;

use App\Models\VideoConsulta;
use App\Models\Paciente;
use Illuminate\Http\Request;

class VideoConsultaController extends Controller
{
    public function index()
    {
        $videoConsultas = VideoConsulta::with('paciente')->get();
        return view('video-consultas.index', compact('videoConsultas'));
    }

    public function create()
    {
        $pacientes = Paciente::all();
        return view('video-consultas.create', compact('pacientes'));
    }

    public function store(Request $request)
    {
        // Más adelante lo llenaremos
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
