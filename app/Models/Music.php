<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = ['title', 'artist', 'genre', 'file_path', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
