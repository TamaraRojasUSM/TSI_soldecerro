<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'seccion',
        'inscripcion_at',
        'tipo_adquisicion',
        'origen',
        'disponibilidad',
        'estado',
        'ubicacion',
        'ultima_mantencion_at',
        'observaciones',
    ];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
