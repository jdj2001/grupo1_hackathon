<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoConsulta extends Model
{
    use HasFactory;

    protected $table = 'video_consultas'; // Si la tabla ya existe y se llama así

    protected $fillable = ['paciente_id', 'enlace'];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
