<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Requests\Web\Product\ProductCreateRequest;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getList();

        return view('products.list', ['items' => $products]);
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    // crete a new product using create blade
    public function create()
    {
        return view('welcome');
    }

    public function store(ProductCreateRequest $request)
    {
        $this->productService->create($request->validated());
        
        return redirect()->route('products.index');
    }

}
