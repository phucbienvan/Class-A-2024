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
        return $this->product->get();
    }

    public function update($product, $params)
    {
        return $product->update($params);
    }

    public function create($params)
    {
        return $this->product->create($params);
    }
}
