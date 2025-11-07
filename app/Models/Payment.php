<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'member_id',
        'numero',
        'estado',
        'pago_at',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
