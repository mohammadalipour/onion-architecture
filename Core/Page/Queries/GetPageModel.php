<?php

namespace Core\Page\Queries;

class GetPageModel
{
    public ?string $name;

    public function __construct(?string $name = null)
    {
        $this->name = $name;
    }

}
