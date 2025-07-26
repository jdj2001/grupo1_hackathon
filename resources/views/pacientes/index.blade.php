@extends('layouts.app')

@section('content')
<div class="py-8 px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Listado de Pacientes</h2>

    <a href="{{ route('pacientes.create') }}"
       class="mb-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        + Registrar nuevo paciente
    </a>

    @if(session('success'))
        <div class="mb-4 text-green-600 font-semibold">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full bg-white shadow rounded">
        <thead class="bg-gray-200">
            <tr>
                <th class="text-left p-2">ID</th>
                <th class="text-left p-2">Nombre</th>
                <th class="text-left p-2">Teléfono</th>
                <th class="text-left p-2">Sexo</th>
                <th class="text-left p-2">Fecha Nac.</th>
                <th class="text-left p-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pacientes as $paciente)
                <tr class="border-t">
                    <td class="p-2">{{ $paciente->id }}</td>
                    <td class="p-2">{{ $paciente->nombre_completo }}</td>
                    <td class="p-2">{{ $paciente->telefono }}</td>
                    <td class="p-2">{{ $paciente->sexo }}</td>
                    <td class="p-2">{{ $paciente->fecha_nacimiento }}</td>
                    <td class="p-2">
                        <a href="{{ route('pacientes.edit', $paciente->id) }}"
                           class="text-blue-600 hover:underline">Editar</a> |
                        <form action="{{ route('pacientes.destroy', $paciente->id) }}"
                              method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-red-600 hover:underline"
                                    onclick="return confirm('¿Deseas eliminar este paciente?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="p-4 text-center text-gray-500">No hay pacientes registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
