<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $projects = array(
      array(
        'id' => 1,
        'logo' => 'auto-tajikistan.png',
      ),
      array(
        'id' => 2,
        'logo' => 'city-service.png',
      ),
      array(
        'id' => 3,
        'logo' => 'dusti-farma.png',
      ),
      array(
        'id' => 4,
        'logo' => 'honai-man.png',
      ),
      array(
        'id' => 5,
        'logo' => 'taj-motors.png',
      ),
    );

    foreach ($projects as $project) {
      $table = new Project;
      $table->logo = $project['logo'];
      $table->title = 'Информация о заказчике';
      $table->head = 'Компания Hyundai Авто Таджикистан — официальный дистрибьютор легковых автомобилей Hyundai Motor Company в Республике Таджикистан. Компания также имеет собственный автосервис. Головной офис компании находится в Душанбе.';
      $table->body = 'body';
      $table->save();
    }
  }
}
