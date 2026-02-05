<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // needs to return the relationship
    // In PHP, a method is a function defined within a class that provides behavior to an object
    public function user() {
        return $this->belongsTo(User::class);

    }

    protected $fillable = [
        'title',
        'description'
    ];
    
    protected $casts = [
        'is_completed' => 'boolean'
    ];
}
