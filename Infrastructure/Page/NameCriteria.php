<?php

namespace Infrastructure\Page;

use Core\Repository\ICriteria;
use Illuminate\Database\Eloquent\Builder;

class NameCriteria implements ICriteria
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function apply(Builder $query): Builder
    {
        $query->where('name', 'like', $this->name);
        return $query;
    }
}
