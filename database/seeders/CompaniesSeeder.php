<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $companies = array(
      array(
        'id' => 1,
        'logo' => 'tajmotors.png',
        'title' => 'Taj-Motors',
        'category' => 'Автосалон',
      ),
      array(
        'id' => 2,
        'logo' => 'city-service.png',
        'title' => 'City Service',
        'category' => 'Цифровизация',
      ),
      array(
        'id' => 3,
        'logo' => 'honai-man.png',
        'title' => 'Хонаи Ман',
        'category' => 'Товары для дома',
      ),
      array(
        'id' => 4,
        'logo' => 'salomat.png',
        'title' => 'Salomat',
        'category' => 'Интернет аптека',
      ),
      array(
        'id' => 5,
        'logo' => 'dusti-farma.png',
        'title' => 'Дусти Фарма',
        'category' => 'Аптека',
      ),
      array(
        'id' => 6,
        'logo' => 'tgem.png',
        'title' => 'ТГЭМ',
        'category' => 'Строительство',
      ),
    );

    foreach ($companies as $company) {
      $table = new Company;
      $table->logo = $company['logo'];
      $table->title = $company['title'];
      $table->category = $company['category'];
      $table->save();
    }
  }
}
