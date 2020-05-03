<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    public function shops()
    {
        return $this->belongsToMany('App\Shop')->withTimestamps();
    }
}
