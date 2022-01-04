<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantagesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $advantages = array(
      array(
        'id' => 1,
        'content' => 'Полный комплекс услуг по автоматизации',
      ),
      array(
        'id' => 2,
        'content' => 'Проектирование, внедрение и поддержка',
      ),
      array(
        'id' => 3,
        'content' => 'Соблюдение срока и бюджета проекта',
      ),
      array(
        'id' => 4,
        'content' => 'Понимание бизнеса заказчика',
      ),
      array(
        'id' => 5,
        'content' => 'Выгодные для клиентов цены',
      ),
      array(
        'id' => 6,
        'content' => 'Работаем на результат',
      ),
      array(
        'id' => 7,
        'content' => 'Гибкое управление проектом',
      ),
      array(
        'id' => 8,
        'content' => 'Отраслевой опыт ',
      ),
    );

    foreach ($advantages as $advantage) {
      $table = new Advantage;
      $table->content = $advantage['content'];
      $table->save();
    }
  }
}
