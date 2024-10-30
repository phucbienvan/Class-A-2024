<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Product\UpdateRequest;
use App\Http\Requests\Web\Product\CreateRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

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

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(UpdateRequest $updateRequest, Product $product)
    {
        $request = $updateRequest->validated();
        $result = $this->productService->update($product, $request);

        if ($result) {
            return redirect()->route('products.index')->with('success','update success');
        }

        return redirect()->route('products.index')->with('error','update failed');
    }
    public function create()
    {
        return view('products.create');
    }
// Thêm sản phẩm mới
    public function store(CreateRequest $createRequest)
    {
        // Lấy dữ liệu đã được xác thực từ CreateRequest
        $data = $createRequest->validated();

        // Gọi service để tạo sản phẩm
        $result = $this->productService->createProduct($data);

        // Kiểm tra nếu tạo sản phẩm thành công
        if ($result) {
            // Nếu thành công, chuyển hướng đến trang danh sách sản phẩm
            return redirect()->route('products.index')->with('success', 'Product created successfully!');
        }

        // Nếu thất bại, quay lại trang trước và báo lỗi
        return redirect()->back()->with('error', 'Failed to create product');
    }
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'delete success'
        ], 200);
    }
}
