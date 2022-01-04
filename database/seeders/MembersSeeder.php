<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $members = array(
      array(
        'id' => 1,
        'avatar' => 'farruh.png',
        'name' => 'Бобоев Фаррух',
        'position' => 'Руководитель отдела разработки и внедрения информационных систем',
      ),
      array(
        'id' => 2,
        'avatar' => 'anvar.png',
        'name' => 'Джабаров Анвар',
        'position' => 'Руководитель отдела Цифрового Маркетинга',
      ),
      array(
        'id' => 3,
        'avatar' => 'manucher.png',
        'name' => 'Садуллоев Манучехр',
        'position' => 'Руководитель отдела Информационных Технологий',
      ),
      array(
        'id' => 4,
        'avatar' => 'timur.png',
        'name' => 'Усмонов Тимур',
        'position' => 'Специалист-разработчик 1С',
      ),
      array(
        'id' => 5,
        'avatar' => 'abduholikov.png',
        'name' => 'Абдухоликов Манучехр',
        'position' => 'Специалист-консультант 1С',
      ),
      array(
        'id' => 6,
        'avatar' => 'shahboz.png',
        'name' => 'Ёраков Шахбоз',
        'position' => 'Специалист-консультант 1С',
      ),
    );

    foreach ($members as $member) {
      $table = new Member;
      $table->avatar = $member['avatar'];
      $table->name = $member['name'];
      $table->position = $member['position'];
      $table->save();
    }
  }
}
