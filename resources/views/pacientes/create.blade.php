@extends('layouts.app')

@section('content')
<div class="py-8 px-4 sm:px-6 lg:px-8 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Registrar Nuevo Paciente</h2>

    <form method="POST" action="{{ route('pacientes.store') }}">
        @csrf

        <div class="mb-4">
            <label for="nombre_completo" class="block font-medium">Nombre completo</label>
            <input type="text" name="nombre_completo" id="nombre_completo"
                   class="mt-1 block w-full rounded border-gray-300 shadow-sm"
                   required>
        </div>

        <div class="mb-4">
            <label for="telefono" class="block font-medium">Teléfono</label>
            <input type="text" name="telefono" id="telefono"
                   class="mt-1 block w-full rounded border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="sexo" class="block font-medium">Sexo</label>
            <select name="sexo" id="sexo"
                    class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                <option value="">Seleccione</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="fecha_nacimiento" class="block font-medium">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"
                   class="mt-1 block w-full rounded border-gray-300 shadow-sm">
        </div>

        <div class="mt-6">
            <button type="submit"
                    class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">
                Guardar
            </button>

            <a href="{{ route('pacientes.index') }}"
               class="ml-4 text-gray-600 hover:underline">Cancelar</a>
        </div>
    </form>
</div>
@endsection
