<?php

namespace Infrastructure\Page;

use Core\Page\Queries\GetPageModel;
use Core\Page\Repositories\IPageRepository;
use Domain\Page\Page;
use Infrastructure\Repository\Repository;

class PageRepository extends Repository implements IPageRepository
{
    protected function model(): string
    {
        return Page::class;
    }

    public function getPage(GetPageModel $model)
    {
        if ($model->name) {
            $this->addCriteria(new NameCriteria($model->name));
        }

        return $this->first();
    }
}
