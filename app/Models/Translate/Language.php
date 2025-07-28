<?php

namespace App\Models\Translate;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
      'name',
      'is_active',
    ];
}
