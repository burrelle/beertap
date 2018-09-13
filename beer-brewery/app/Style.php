<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Style extends Model
{
    protected $fillable = ['style'];

    public function glass()
    {
        return $this->belongsTo(Glass::class, 'glass_id');
    }
}