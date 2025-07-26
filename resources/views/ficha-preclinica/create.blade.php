@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-black p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Nueva Ficha Preclínica</h1>

    <form method="POST" action="{{ route('ficha-preclinicas.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">Paciente</label>
            <select name="paciente_id" class="w-full border rounded px-3 py-2">
                <option value="">Seleccione un paciente</option>
                @foreach ($pacientes as $paciente)
                    <option value="{{ $paciente->id }}">{{ $paciente->nombre_completo }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Presión arterial</label>
            <input type="text" name="presion_arterial" class="w-full border rounded px-3 py-2" />
        </div>

        <div class="mb-4">
            <label class="block mb-1">Peso (kg)</label>
            <input type="number" name="peso" class="w-full border rounded px-3 py-2" step="0.1" />
        </div>

        <div class="mb-4">
            <label class="block mb-1">Observaciones</label>
            <textarea name="observaciones" class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <div class="flex justify-end gap-2">
            <a href="{{ route('ficha-preclinicas.index') }}" class="bg-gray-300 px-4 py-2 rounded">Cancelar</a>
            <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded">Guardar</button>
        </div>
    </form>
</div>
@endsection
