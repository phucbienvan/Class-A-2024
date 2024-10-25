<?php

namespace App\Services;

use App\Models\Product;

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

    public function create($params)
    {
        return $this->product->create($params);
    }
    
    public function update($product, $params)
    {
        return $product->update($params);
    }
}
