<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $table = 'messages';

    protected $fillable = [
        'message_id',
        'user_id',
        'type',
        'message',
        'image',
        'read',
    ];

    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }

    
}
