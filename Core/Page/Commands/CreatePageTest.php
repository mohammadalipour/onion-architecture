<?php

namespace Core\Page\Commands;

use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CreatePageTest extends TestCase
{
    use DatabaseTransactions;

    public function test_can_create_page()
    {
        $faker = Factory::create();

        $model = new CreatePageModel();
        $model->name = $faker->words(3, true);

        $command = $this->app->make(ICreatePage::class);
        $page = $command->execute($model);

        self::assertEquals($page->name, $model->name);
    }
}
