<?php

namespace App\Models\Event;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventToDoListVisibleUser extends Model
{
    protected $table = "event_todo_list_visible_user";

    protected $fillable = [
        'todo_list_id',
        'user_id',
    ];

    public function ToDoList(): BelongsTo
    {
        return $this->belongsTo(EventToDoList::class, 'todo_list_Id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
