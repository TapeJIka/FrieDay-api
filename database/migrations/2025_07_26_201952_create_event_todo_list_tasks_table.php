<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event_todo_list_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('todo_list_id')->references('id')->on('event_todo_lists')->onDelete('cascade');
            $table->string('title');
            $table->string('description')->nullable();
            $table->dateTime('due_date');
            $table->foreignId('assigned_to')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('is_done')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_todo_list_tasks');
    }
};
