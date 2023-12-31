<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryInterface;

class MainController extends Controller
{
    private ProductRepository $productRepository;
    public function index()
    {
        $this->productRepository = App::make(ProductRepository::class);
        return view('main.index', [
            'products' => $this->productRepository->all(),
        ]);
    }
}
