<?php

namespace Infrastructure\Page;

use Core\Interfaces\ICacheService;
use Core\Page\Queries\GetPageModel;
use Core\Page\Repositories\IPageRepository;
use Domain\Page\Page;
use Infrastructure\Repository\Repository;

class PageCacheRepository extends Repository implements IPageRepository
{
    private $cacheService;

    public function __construct(ICacheService $cacheService)
    {
        $this->cacheService =$cacheService;
    }

    protected function model(): string
    {
        return Page::class;
    }

    public function getPage(GetPageModel $model)
    {
        return $this->cacheService->remember($model->name,15,function () use ($model){
            if ($model->name) {
                $this->addCriteria(new NameCriteria($model->name));
            }
            return $this->first();
        });
    }
}
