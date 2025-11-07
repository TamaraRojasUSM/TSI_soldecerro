<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'rut',
        'numbre',
        'estado',
        'tipo_instrumento',
        'fecha_ingreso_at',
        'fecha_nacimiento_at',
        'seccion',
        'direccion',
        'contacto',
        'info_adicional',
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
