<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
    ];

    //disable timestamps
    public $timestamps = false;

    protected $guarded = ['category_id'];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
