<?php

namespace Core\Page\Queries;

use Core\Page\Repositories\IPageRepository;

class GetPage implements IGetPage
{
    private IPageRepository $repository;

    public function __construct(IPageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(GetPageModel $model)
    {
        return $this->repository->getPage($model);
    }
}
