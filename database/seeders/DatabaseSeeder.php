<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Parameter;
use App\Models\SuccessStep;
use App\Models\Value;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $admin = new Admin;
    $admin->login = 'admin';
    $admin->password = 'admin';
    $admin->save();

    $parameters = new Parameter;
    $parameters->email = 'diis@orienpharm.tj';
    $parameters->phone = '+992 988 99 22 11';
    $parameters->address = 'Таджикистан, г. Душанбе, ул. Шамси 4Б';
    $parameters->copyright = '© 2021 ООО «Ориён Фарм»';
    $parameters->save();

    // =>> our values
    $values = array(
      array('content' => 'Знание тенденций и инноваций'),
      array('content' => 'Клиенто - ориентированность'),
      array('content' => 'Прозрачность и надежность'),
      array('content' => 'Быстрая интеграция и реализация'),
    );
    foreach ($values as $value) {
      $table = new Value;
      $table->content = $value['content'];
      $table->save();
    }
    // our values <<=
    // =>> our steps to success
    $successSteps = array(
      array('content' => 'Создание отдела из 8-х человек и начало обучения продолжительностью в год.'),
      array('content' => 'Наши сотрудники успешно прошли сертификацию 1С Профессионал и мы получили 4 типа сертификата.'),
      array('content' => 'Получили статус Франчайзи 1С.'),
      array('content' => 'К нам присоединились новые перспективные сотрудники и нас стало больше.'),
      array('content' => 'Наш новый сотрудник успешно прошел сертификацию 1С Профессионал и наша копилка пополнилась новым сертификатом 1С Профессионал: Документооборот 2.1.'),
    );
    foreach ($successSteps as $step) {
      $table = new SuccessStep;
      $table->content = $step['content'];
      $table->save();
    }
    // our steps to success <<=
    $this->call([
      NavigationsSeeder::class,
      AdvantagesSeeder::class,
      ProductsSeeder::class,
      ProjectsSeeder::class,
      CompaniesSeeder::class,
      MembersSeeder::class,
    ]);
  }
}
