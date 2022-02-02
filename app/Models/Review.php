<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';

    protected $fillable = [
        'user_id',
        'id',
        'rating',
        'review',
        'is_anonim',
    ];

    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }

    public function product()
    {
        return $this->belongsTo(App\Models\Products::class);
    }

    public function order()
    {
        return $this->belongsTo(App\Models\Order::class);
    }


}
