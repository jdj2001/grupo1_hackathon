@extends('layouts.app')

@section('content')
<div class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Fichas Preclínicas</h2>

    <a href="{{ route('ficha-preclinicas.create') }}"
       class="mb-4 inline-block bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">
        + Nueva ficha preclínica
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
                <th class="text-left p-2">Paciente</th>
                <th class="text-left p-2">Presión</th>
                <th class="text-left p-2">Peso</th>
                <th class="text-left p-2">Fecha</th>
                <th class="text-left p-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($fichaPreclinicas as $ficha)
                <tr class="border-t">
                    <td class="p-2">{{ $ficha->id }}</td>
                    <td class="p-2">{{ $ficha->paciente->nombre_completo ?? 'Desconocido' }}</td>
                    <td class="p-2">{{ $ficha->presion }}</td>
                    <td class="p-2">{{ $ficha->peso }}</td>
                    <td class="p-2">{{ $ficha->created_at->format('d/m/Y') }}</td>
                    <td class="p-2">
                        <a href="{{ route('ficha-preclinicas.edit', $ficha->id) }}"
                           class="text-blue-600 hover:underline">Editar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-gray-500 p-4">No hay fichas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
