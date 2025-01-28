<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['name', 'category_id'];

    public function categories()
    {
        return $this->hasMany('category_id', Categories::class);
    }
}
