<?php

namespace App\Models\Event;

use App\Models\Group\Group;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventToDoList extends Model
{
    protected $table = 'event_todo_lists';

    protected $fillable = [
        'group_id',
        'title',
        'description',
        'created_by',
    ];

    public function group():BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function createdBy():BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
