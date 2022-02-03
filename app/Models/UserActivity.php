<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    use HasFactory;

    //table
    protected $table = 'user_activities';

    //fillable
    protected $fillable = [
        'user_id',
        'last_login',
        'login_count',
        'order_count',
    ];

    //hidden timestamp
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    //relationships
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
