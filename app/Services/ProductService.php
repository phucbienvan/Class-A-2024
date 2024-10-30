<?php

namespace App\Services;

use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Log;

class ProductService
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getList()
    {
        return $this->product->where('price', '>', 50)->get();
    }

    public function update($product, $params)
    {
        return $product->update($params);
    }

    public function create($params)
    {
        try {
            
            return $this->product->create($params);
        } catch (Exception $exception) {
            Log::error($exception);
            return false;
        }
    }
}
