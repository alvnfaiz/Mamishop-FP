<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = [
        'name',
        'slug',
    ];

    //disable timestamps
    public $timestamps = false;

    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
