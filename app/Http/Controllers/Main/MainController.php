<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\App;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;

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
