<?php

namespace App\Models\Translate;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TextLabelLanguage extends Model
{
    protected $fillable = [
        'label_id',
        'language_id',
        'value',
        'is_active',
    ];

    public function label(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }
}
