<?php

namespace App\Http\Product;

use Core\Product\Commands\CreateProductModel;
use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ];
    }

    public function data(): CreateProductModel
    {
        $model = new CreateProductModel();
        $model->name = $this->input('name');
        $model->description = $this->input('description');
        $model->price = floatval($this->input('price'));
        return $model;
    }
}
