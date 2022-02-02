<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'order_id',
        'user_id',
        'quantity',
        'total_price',
        'status',
        'resi_number',
        'image',
        'receiver',
        'address',
        'phone_number',
        'address',
        'expired_at',
    ];

    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }

    public function order_details()
    {
        return $this->hasMany(App\Models\OrderDetail::class);
    }

}
