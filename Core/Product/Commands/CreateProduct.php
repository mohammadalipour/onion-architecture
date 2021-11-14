<?php

namespace Core\Product\Commands;

use Domain\Product\Product;

class CreateProduct implements ICreateProduct
{
    public function execute(CreateProductModel $model): Product
    {
        $product = new Product();
        $product->name = $model->name;
        $product->description = $model->description;
        $product->price = $model->price;
        $product->save();

        return $product;
    }
}
