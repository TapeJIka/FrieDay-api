<?php

namespace App\Models\Poll;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PollVote extends Model
{
    protected $fillable = [
        'poll_id',
        'option_id',
        'user_id',
        'vote_at',
    ];

    public function poll(): BelongsTo
    {
        return $this->belongsTo(Poll::class);
    }

    public function option(): BelongsTo
    {
        return $this->belongsTo(PollOptions::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
