<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pages = array(
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

    foreach ($pages as $page) {
      $table = new Page();
      $table->title = $page['title'];
      $table->route = $page['route'];
      $table->save();
    }
  }
}
