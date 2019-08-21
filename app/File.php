<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    public function document() : BelongsTo
    {
        return $this->belongsTo(Document::class);
    }
}
