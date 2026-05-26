<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventPartner extends Model
{
    protected $table = 'event_partners';

    protected $fillable = [
        'name',
        'logo_url'
    ];
}