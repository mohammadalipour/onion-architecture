<?php

namespace Service\Page;


use Core\Page\Queries\IGetPage;
use Service\Common\Controller;

class PageController extends Controller
{
    public function index(GetPageRequest $request, IGetPage $command)
    {
        $page = $command->execute($request->data());

       return $this->response($page,new PageTransformer());
    }
}
