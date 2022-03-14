<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $guarden = ['product_id'];

    public static function index()
    {
        $products = Product::all();
        return $products;

    }

    
}
