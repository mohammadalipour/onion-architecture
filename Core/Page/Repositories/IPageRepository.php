<?php

namespace Core\Page\Repositories;

use Core\Page\Queries\GetPageModel;
use Core\Repository\IRepository;

interface IPageRepository extends IRepository
{
    public function getPage(GetPageModel $model);
}
