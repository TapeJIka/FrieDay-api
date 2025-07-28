<?php

namespace App\Models\Event;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventToDoListTask extends Model
{
    protected $table = "event_todo_list_task";

    public $fillable = [
        'todo_list_id',
        'title',
        'description',
        'due_date',
        'assigned_to',
        'created_by',
        'is_done',
    ];

    public function todoList():BelongsTo
    {
        return $this->belongsTo(EventToDoList::class, 'todo_list_id', 'id');
    }

    public function assignedTo():BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to', 'id');
    }

    public function createdBy():BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
