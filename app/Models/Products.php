<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'slug',
        'deskripsi',
        'price',
        'stock',
        'status',
        'categories_id',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(App\Models\Categories::class);
    }

    public function cart()
    {
        return $this->hasMany(App\Models\Cart::class);
    }

}
