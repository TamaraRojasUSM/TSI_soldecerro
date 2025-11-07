<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'instrument_id',
        'maintenance_at',
        'observaciones',
    ];

    public function instrument()
    {
        return $this->belongsTo(Instrument::class);
    }
}
