<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

}
