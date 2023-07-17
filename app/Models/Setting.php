<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';

    protected $fillable = [
        'name',
        'key',
        'value',
        'locked',
    ];

    protected $hidden = [
        'locked',
    ];

    protected $casts = [
        'value' => 'array',
        'locked' => 'boolean',
    ];

}
