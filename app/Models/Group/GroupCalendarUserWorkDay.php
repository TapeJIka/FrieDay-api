<?php

namespace App\Models\Group;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GroupCalendarUserWorkDay extends Model
{
    protected $fillable = [
        'group_calendar_id',
        'user_id',
        'date',
        'status',
        'note',
    ];

    public function groupCalendar(): BelongsTo
    {
        return $this->belongsTo(GroupCalendar::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
