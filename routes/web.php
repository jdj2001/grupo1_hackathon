<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\FichaPreclinicaController;
use App\Http\Controllers\MultimediaController;
use App\Http\Controllers\VideoConsultaController;
use App\Http\Controllers\AlertaController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Ruta pública inicial
Route::get('/', function () {
    return view('welcome');
});

// Registro de usuario (solo si no está logueado)
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// Ruta dinámica al dashboard según el rol
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();

        switch ($user->rol_id) {
            case 1:
                return view('dashboards.admin');
            case 2:
                return view('dashboards.promotor');
            case 3:
                return view('dashboards.medico');
            default:
                abort(403, 'Rol no autorizado.');
        }
    })->name('dashboard');

    // Ruta de ejemplo temporal para editar perfil
    Route::get('/profile', function () {
        return 'Perfil de usuario (en construcción)';
    })->name('profile.edit');

    // Rutas de recursos (CRUD)
    Route::resource('pacientes', PacienteController::class);
    Route::resource('ficha-preclinicas', FichaPreclinicaController::class);
    Route::resource('multimedias', MultimediaController::class);
    Route::resource('video-consultas', VideoConsultaController::class);
    Route::resource('alertas', AlertaController::class);
});

require __DIR__.'/auth.php';
