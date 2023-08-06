<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{
    private ProductRepository $productRepository;
    public function index($slug)
    {
        $this->productRepository = App::make(ProductRepository::class);
        return view('main.product', [
            'product' => $this->productRepository->find($slug),
            'products' => $this->productRepository->all(),
        ]);
    }
}
