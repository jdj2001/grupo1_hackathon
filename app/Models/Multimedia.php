<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Multimedia extends Model
{
    use HasFactory;

    protected $table = 'multimedias'; // 👈 ¡Esta línea es clave!

    protected $fillable = [
        'paciente_id',
        'tipo',
        'ruta',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

}

