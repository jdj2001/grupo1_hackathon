@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Listado de Video Consultas</h1>

    <a href="{{ route('video-consultas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded mb-4 inline-block">Nueva Video Consulta</a>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($videoConsultas as $consulta)
            <div class="bg-black rounded shadow p-4">
                <h2 class="text-xl font-semibold">{{ $consulta->paciente->nombre_completo ?? 'Paciente desconocido' }}</h2>
                <p><strong>Fecha:</strong> {{ $consulta->created_at->format('d/m/Y H:i') }}</p>
                <p><strong>Enlace:</strong> <a href="{{ $consulta->enlace }}" class="text-blue-500 underline" target="_blank">Ver Video</a></p>
            </div>
        @endforeach
    </div>
</div>
@endsection
