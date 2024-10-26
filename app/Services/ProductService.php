<?php
namespace App\Services;
use App\Models\Product;

class ProductService{
    protected $model;
    public function __construct(Product $product){
        $this->model = $product;
    }

    public function getAll(){
        return $this->model->get();
    }

    public function update($product, $data){
        try{
            return $product->update($data);
        }catch(Exception $exception){
            Log::error($exception);
            return false;
        }
    }

    public function create($data){
        try{
            return $this->model->create($data);
        }
        catch(Exception $exception){
            Log::error($exception);

            return false;
        }
    }
}