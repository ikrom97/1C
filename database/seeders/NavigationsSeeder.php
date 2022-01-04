<?php

namespace Database\Seeders;

use App\Models\Navigation;
use Illuminate\Database\Seeder;

class NavigationsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $navigations = array(
      array(
        'id' => 1,
        'title' => 'О нас',
        'route' => 'about',
      ),
      array(
        'id' => 2,
        'title' => 'Публикации',
        'route' => 'publication',
      ),
      array(
        'id' => 3,
        'title' => 'Проекты',
        'route' => 'projects',
      ),
      array(
        'id' => 4,
        'title' => 'Услуги',
        'route' => 'services',
      ),
      array(
        'id' => 5,
        'title' => 'Продукты 1С',
        'route' => 'products',
      ),
      array(
        'id' => 6,
        'title' => '1С:ИТС',
        'route' => 'its',
      ),
    );

    foreach ($navigations as $nav) {
      $table = new Navigation;
      $table->title = $nav['title'];
      $table->route = $nav['route'];
      $table->save();
    }
  }
}
