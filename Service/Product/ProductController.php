<?php

namespace Service\Product;

use App\Http\Product\CreateProductRequest;
use App\Http\Product\GetProductPaginationRequest;
use Core\Product\Commands\ICreateProduct;
use Core\Product\Queries\IGetProductPagination;
use Illuminate\Http\JsonResponse;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use Service\Common\Controller;

class ProductController extends Controller
{

    public function index(GetProductPaginationRequest $request, IGetProductPagination $query)
    {
        $pagination = $query->execute($request->data());

        return $this->response($pagination,new ProductTransformer())
            ->paginateWith(new IlluminatePaginatorAdapter($pagination));
    }

    public function store(CreateProductRequest $request, ICreateProduct $command)
    {
        $product = $command->execute($request->data());

        return $this->response($product,new ProductTransformer());
    }
}
