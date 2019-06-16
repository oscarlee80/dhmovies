<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $guarded = [];

    public function serie ()
    {
        return $this->belongsTo(Serie::class);
    }

    public function episodes ()
    {
        return $this->HasMany(Episode::class);
    }
}
