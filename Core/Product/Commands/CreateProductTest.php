<?php

namespace Core\Product\Commands;

use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CreateProductTest extends TestCase
{
    use DatabaseTransactions;

    public function test_can_create_page()
    {
        $faker = Factory::create();

        $model = new CreateProductModel();
        $model->name = $faker->words(3, true);
        $model->description = $faker->paragraph(1);
        $model->price = $faker->randomFloat(2, 1, 100);

        $command = $this->app->make(ICreateProduct::class);
        $product = $command->execute($model);

        self::assertEquals($product->name, $model->name);
        self::assertEquals($product->description, $model->description);
        self::assertEquals($product->price, $model->price);
    }
}
