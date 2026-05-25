<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Category extends Model
{
    protected $table = 'event_categories';

    protected $fillable = [
        'name'
    ];

    public function events()
    {
        return $this->hasMany(Event::class, 'category_id');
    }
}