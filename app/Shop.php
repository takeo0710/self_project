<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Shop extends Model
{
    protected $fillable = [
        'name',
        'prefecture',
        'municipality',
        'address',
        'info1',
        'info2',
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
