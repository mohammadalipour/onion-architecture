<?php

namespace Core\Page\Commands;

use Domain\Page\Page;


class CreatePage implements ICreatePage
{
    public function execute(CreatePageModel $model): Page
    {
        $page = new Page();
        $page->name = $model->name;
        $page->save();

        return $page;
    }
}
