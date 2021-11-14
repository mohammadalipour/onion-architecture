<?php

namespace Database\Factories;

use Domain\Page\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition()
    {
        $createdAt = $this->faker->dateTimeBetween('-10 days');

        return [
            'name' => $this->faker->words(3, true),
            'created_at' => $createdAt,
            'updated_at' => $createdAt,
        ];
    }
}
