<?php

namespace Core\Page\Commands;

use Domain\Page\Page;

interface ICreatePage
{
    public function execute(CreatePageModel $model): Page;
}
