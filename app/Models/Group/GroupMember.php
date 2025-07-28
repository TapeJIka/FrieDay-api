<?php

namespace App\Models\Group;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GroupMember extends Model
{
    protected $fillable = [
        'group_id',
        'user_id',
        'is_owner',
        'calendar_copied',
    ];

    public function group():BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
