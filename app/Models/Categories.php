<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriesFactory> */
    use HasFactory;
    protected $primaryKey = 'category_id';
    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function getAllProduct()
    {
        $category = Categories::find(1); // Ganti 1 dengan ID kategori yang diinginkan
        $products = $category->products;

        // Menampilkan hasil
        foreach ($products as $product) {
            echo $product->name . "\n";
        }

    }
}
