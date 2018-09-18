<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
        'name', 'price', 'brewery_id', 'abv', 'ibu', 'style_id', 'volume'
    ];

    public function brewery()
    {
        return $this->belongsTo(Brewery::class, 'brewery_id');
    }

    public function style()
    {
        return $this->belongsTo(Style::class, 'style_id');
    }
}