<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function messages() {
        return $this->hasMany(Message::class, 'room_id');
    }

    public function users() {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
