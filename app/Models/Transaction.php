<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    // Kolom yang diizinkan untuk diisi secara massal
    protected $fillable = [
        'event_id', 
        'order_id', 
        'customer_name', 
        'customer_email', 
        'customer_phone', 
        'total_price', 
        'status', 
        'snap_token'
    ];

    // Relasi balik ke model Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}