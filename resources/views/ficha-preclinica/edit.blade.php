@extends('layouts.app')

@section('content')
<div class="py-8 px-4 sm:px-6 lg:px-8 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Editar Ficha Preclínica</h2>

    <form method="POST" action="{{ route('ficha-preclinicas.update', $fichaPreclinica->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-medium">Paciente</label>
            <input type="text" value="{{ $fichaPreclinica->paciente->nombre_completo ?? 'Desconocido' }}"
                   class="mt-1 block w-full rounded border-gray-300 shadow-sm bg-gray-100" disabled>
        </div>

        <div class="mb-4">
            <label for="presion" class="block font-medium">Presión arterial</label>
            <input type="text" name="presion" id="presion"
                   value="{{ old('presion', $fichaPreclinica->presion) }}"
                   class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="peso" class="block font-medium">Peso (kg)</label>
            <input type="number" step="0.1" name="peso" id="peso"
                   value="{{ old('peso', $fichaPreclinica->peso) }}"
                   class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
        </div>

        <div class="mt-6">
            <button type="submit"
                    class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Actualizar
            </button>

            <a href="{{ route('ficha-preclinicas.index') }}"
               class="ml-4 text-gray-600 hover:underline">Cancelar</a>
        </div>
    </form>
</div>
@endsection
