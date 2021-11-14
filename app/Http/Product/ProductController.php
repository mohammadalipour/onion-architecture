<?php

namespace App\Http\Product;

use App\Http\Controllers\Controller;
use Core\Product\Commands\ICreatePage;
use Core\Product\Queries\IGetPage;
use Illuminate\Http\RedirectResponse;
use Inertia\Response;
use Laravel\Jetstream\Jetstream;

class ProductController extends Controller
{
    public function index(GetProductPaginationRequest $request, IGetPage $query): Response
    {
        $pagination = $query->execute($request->data());

        return Jetstream::inertia()->render($request, 'Home', [
            'pagination' => $pagination
        ]);
    }

    public function store(CreateProductRequest $request, ICreatePage $command): RedirectResponse
    {
        $command->execute($request->data());
        return redirect()->route('home');
    }
}
