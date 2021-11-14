<?php

namespace Service\Page;

use Common\Date\DateHelper;
use Illuminate\Database\Eloquent\Model;
use Service\Common\Transformer;

class PageTransformer extends Transformer
{
    function attributes(Model $model): array
    {
        return [
            'name' => $model->name,
        ];
    }
}
