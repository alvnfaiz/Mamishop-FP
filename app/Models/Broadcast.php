<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
    use HasFactory;

    //table
    protected $table = 'broadcasts';

    //fillable
    protected $fillable = [
        'user_id',
        'value',
        'message',
        'image',
        'created_at',
        'send_at',
    ];

    

    
}
