<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(
            array(
                'id' => 1,
                'title' => '1С:Бухгалтерия 8 для Таджикистана',
            ),
            array(
                'id' => 2,
                'title' => '1С:Документооборот 8',
            ),
            array(
                'id' => 3,
                'title' => '1С:Розница 8',
            ),
            array(
                'id' => 4,
                'title' => '1С:Управление холдингом 8',
            ),
            array(
                'id' => 5,
                'title' => '1С ERP Управление предприятием',
            ),
            array(
                'id' => 6,
                'title' => '1С:Управление торговлей 8',
            ),
            array(
                'id' => 7,
                'title' => '1С:Зарплата и управление персоналом 8',
            ),
            array(
                'id' => 8,
                'title' => '1С: Альфа Авто: Автосервис+Автозапчасти Проф',
            ),
            array(
                'id' => 9,
                'title' => '1С:Предприятие 8',
            ),
        );

        foreach ($products as $product) {
            $Product = new Product;
            $Product->title = $product['title'];
            $Product->save();
        }
    }
}
