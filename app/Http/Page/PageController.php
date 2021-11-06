<?php

namespace App\Http\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function test()
    {
        return new JsonResponse(['hi'=>'world']);
    }
}
