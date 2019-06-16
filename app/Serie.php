<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $guarded = [];

    public function genre ()
    {
        return $this->belongsTo(Genre::class);
    }

    public function seasons ()
    {
        return $this->HasMany(Season::class);
    }
}
