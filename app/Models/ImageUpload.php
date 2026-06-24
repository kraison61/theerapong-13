<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ImageUpload extends Model
{
    protected $fillable = ['imageable_id', 'imageable_type', 'img_url', 'location', 'worked_date'];

    protected $casts = [
        'worked_date' => 'datetime',
    ];

    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}
