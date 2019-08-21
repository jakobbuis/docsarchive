<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Document extends Model
{
    public function files() : HasMany
    {
        return $this->hasMany(File::class);
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
