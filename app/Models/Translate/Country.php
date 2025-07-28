<?php

namespace App\Models\Translate;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Country extends Model
{
    protected $fillable = [
        'code',
        'name',
        'default_language_id',
        'is_active',
    ];

    public function defaultLanguage(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }
}
