@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Multimedia Registrada</h1>

    <a href="{{ route('multimedias.create') }}" class="bg-blue-500 text-black px-4 py-2 rounded mb-4 inline-block">
        + Agregar Multimedia
    </a>

    @if($multimedias->isEmpty())
        <p class="text-gray-600">No hay archivos multimedia registrados.</p>
    @else
        <table class="min-w-full bg-white shadow rounded overflow-hidden">
            <thead>
                <tr class="bg-gray-200 text-left text-sm font-semibold text-gray-700">
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">Paciente</th>
                    <th class="px-6 py-3">Tipo</th>
                    <th class="px-6 py-3">Ruta / Archivo</th>
                    <th class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700">
                @foreach($multimedias as $media)
                    <tr class="border-t">
                        <td class="px-6 py-4">{{ $media->id }}</td>
                        <td class="px-6 py-4">{{ $media->paciente->nombre_completo ?? 'Sin paciente' }}</td>
                        <td class="px-6 py-4">{{ ucfirst($media->tipo) }}</td>
                        <td class="px-6 py-4">
                            @if(str_contains($media->ruta, ['jpg', 'png', 'jpeg']))
                                <img src="{{ asset('storage/' . $media->ruta) }}" alt="Imagen" class="h-12">
                            @else
                                <a href="{{ asset('storage/' . $media->ruta) }}" class="text-blue-500 underline" target="_blank">Ver archivo</a>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('multimedias.destroy', $media) }}" method="POST" onsubmit="return confirm('¿Estás seguro?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
