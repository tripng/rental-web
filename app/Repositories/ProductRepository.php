<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        return Product::all();
    }
    public function find($slug)
    {
        return Product::where('slug', $slug)->first();
    }
    public function store()
    {
    }
    public function delete($slug)
    {
    }
}
