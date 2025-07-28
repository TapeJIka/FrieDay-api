<?php

namespace App\Models\Translate;

use Illuminate\Database\Eloquent\Model;

class TextLabel extends Model
{
    protected $fillable = [
        'name',
        'is_active',
    ];
}
