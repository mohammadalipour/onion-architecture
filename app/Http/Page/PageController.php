<?php

namespace App\Http\Page;

use App\Http\Controllers\Controller;
use Core\Page\Queries\IGetPage;
use Inertia\Response;
use Laravel\Jetstream\Jetstream;

class PageController extends Controller
{
    public function index(GetPageRequest $request, IGetPage $query): Response
    {
        $page = $query->execute($request->data());

        return Jetstream::inertia()->render($request, 'Home', [
            'page' => $page
        ]);
    }
}
