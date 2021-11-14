<?php

namespace Core\Page\Queries;


interface IGetPage
{
    public function execute(GetPageModel $model);
}
