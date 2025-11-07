<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'member_id',
        'instrument_id',
        'prestamo_at',
        'devolucion_at',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function instrument()
    {
        return $this->belongsTo(Instrument::class);
    }
}
