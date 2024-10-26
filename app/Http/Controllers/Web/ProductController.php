<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Product\UpdateRequest;
use App\Http\Requests\Web\Product\CreateRequest;
use App\Services\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService){
        $this->productService = $productService;
    }

    public function index(){
        $products = $this->productService->getAll();

        return View('products.list', ['products' => $products]);
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }
    
    public function update(UpdateRequest $updateRequest, Product $product){
        $request = $updateRequest->validated();
        $result = $this->productService->update($product, $request);

        if(!$request){
            return redirect()->route('productEdit');
        }

        return redirect()->route('productIndex')->with('updateSuccess', 'Updated success!');
    }

    public function show(Product $product){
        return view('products.show', ['product' => $product]);
    }

    public function store(){
        return view('products.store');
    }

    public function create(CreateRequest $createRequest){
        $request = $createRequest->validated();
        $result = $this->productService->create($request);

        if(!$result){
            return redirect()->route('productStore');
        }

        return redirect()->route('productIndex')->with('createSuccess', 'Created success!');
    }
}
