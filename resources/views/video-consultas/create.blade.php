@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Nueva Video Consulta</h1>

    <form action="{{ route('video-consultas.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="paciente_id" class="block text-gray-700 font-bold mb-2">Paciente</label>
            <select name="paciente_id" id="paciente_id" class="form-select w-full rounded border-gray-300">
                @foreach($pacientes as $paciente)
                    <option value="{{ $paciente->id }}">{{ $paciente->nombre_completo }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="enlace" class="block text-gray-700 font-bold mb-2">Enlace de la Consulta</label>
            <input type="url" name="enlace" id="enlace" class="form-input w-full rounded border-gray-300" required>
        </div>

        <button type="submit" class="bg-green-600 text-black px-4 py-2 rounded hover:bg-green-700">Guardar</button>
    </form>
</div>
@endsection
