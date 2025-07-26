@extends('layouts.app')

@section('content')
<div class="py-12 px-6">
    <h2 class="text-2xl font-semibold mb-8">Bienvenido, Promotor de Salud</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        <!-- Tarjeta: Pacientes -->
        <a href="{{ route('pacientes.index') }}" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-200">
            <div class="flex items-start gap-4">
                <div class="text-4xl">🧑‍🤝‍🧑</div>
                <div>
                    <h3 class="text-lg font-bold">Pacientes</h3>
                    <p class="text-gray-600 text-sm">Lista de pacientes y registrar nuevos.</p>
                </div>
            </div>
        </a>

        <!-- Tarjeta: Fichas Preclínicas -->
        <a href="{{ route('ficha-preclinicas.index') }}" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-200">
            <div class="flex items-start gap-4">
                <div class="text-4xl">📋</div>
                <div>
                    <h3 class="text-lg font-bold">Fichas Preclínicas</h3>
                    <p class="text-gray-600 text-sm">Llenar fichas médicas iniciales.</p>
                </div>
            </div>
        </a>

        <!-- Tarjeta: Multimedia -->
        <a href="{{ route('multimedias.index') }}" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-200">
            <div class="flex items-start gap-4">
                <div class="text-4xl">🖼️</div>
                <div>
                    <h3 class="text-lg font-bold">Multimedia</h3>
                    <p class="text-gray-600 text-sm">Subir y administrar archivos médicos.</p>
                </div>
            </div>
        </a>

        <!-- Tarjeta: Video Consultas -->
        <a href="#" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-200">
            <div class="flex items-start gap-4">
                <div class="text-4xl">📹</div>
                <div>
                    <h3 class="text-lg font-bold">Video Consultas</h3>
                    <p class="text-gray-600 text-sm">Programar video consultas realizadas.</p>
                </div>
            </div>
        </a>

        <!-- Tarjeta: Alertas Médicas -->
        <a href="#" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-200">
            <div class="flex items-start gap-4">
                <div class="text-4xl">🚨</div>
                <div>
                    <h3 class="text-lg font-bold">Alertas Médicas</h3>
                    <p class="text-gray-600 text-sm">Controlar signos vitales o alertas recibidas.</p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
