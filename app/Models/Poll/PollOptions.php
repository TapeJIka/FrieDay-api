<?php

namespace App\Models\Poll;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PollOptions extends Model
{
    protected $fillable = [
        'poll_id',
        'option',
    ];

    public function poll(): BelongsTo
    {
        return $this->belongsTo(Poll::class);
    }
}
