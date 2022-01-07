<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $texts = array(
      array(
        'id' => 1,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'email',
        'text' => 'diis@orienpharm.tj',
      ),
      array(
        'id' => 2,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'phone',
        'text' => '+992 988 99 22 11',
      ),
      array(
        'id' => 3,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'address',
        'text' => 'Таджикистан, <br> г. Душанбе, ул. Шамси 4Б',
      ),
      array(
        'id' => 4,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback',
        'text' => 'Обратный звонок',
      ),
      array(
        'id' => 5,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback-title',
        'text' => 'У вас есть вопросы по 1С?',
      ),
      array(
        'id' => 6,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback-text',
        'text' => 'Оставьте свои контактные данные <br> и мы свяжемся с вами в ближайшее время',
      ),
      array(
        'id' => 7,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback-submit-btn',
        'text' => 'Позвонить мне',
      ),
      array(
        'id' => 8,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback-fail-msg',
        'text' => 'Перепроверьте данные',
      ),
      array(
        'id' => 8,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback-success-msg',
        'text' => 'Перезвоним в течении 20 минут',
      ),
    );

    foreach ($texts as $text) {
      $table = new Text();
      $table->type = $text['type'];
      $table->page_id = $text['page_id'];
      $table->caption = $text['caption'];
      $table->text = $text['text'];
      $table->save();
    }
  }
}
