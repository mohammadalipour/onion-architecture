<?php

namespace Service\Page;

use Core\Page\Queries\GetPageModel;
use Illuminate\Foundation\Http\FormRequest;

class GetPageRequest extends FormRequest
{
    public function rules(): array
    {
        return [];
    }

    public function data(): GetPageModel
    {
        return new GetPageModel(
            $this->query('name'),
        );
    }
}
