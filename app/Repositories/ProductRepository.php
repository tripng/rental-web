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
    public function find($id)
    {
        return Product::find($id);
    }
    public function store()
    {
    }
    public function delete($id)
    {
    }
}
