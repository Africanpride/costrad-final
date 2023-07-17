<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\MediaCollections\Models\Concerns\HasUuid;

class Video extends Model
{
    use HasFactory, HasUuid;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'url',
        'thumbnail',
    ];

    public function institute(): BelongsTo
    {
        return $this->belongsTo(Institute::class);
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
