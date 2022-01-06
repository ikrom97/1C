<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Certificate;
use App\Models\Gain;
use App\Models\Parameter;
use App\Models\Publication;
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
    // =>> certificates
    for ($i = 1; $i < 5; $i++) {
      $certificate = new Certificate;
      $certificate->img = 'certificate' . $i . '.jpg';
      $certificate->save();
    }
    // certificates <<=
    // =>> publications
    foreach (range(1, 32) as $val) {
      $publication = new Publication;
      $publication->content = 'Приказом ФНС России от 26.03.2021 № ЕД-7-3/228@ (далее – Приказ № 288) внесены изменения в форму, порядок заполнения и электронный формат налоговой декларации по НДС (утв. приказом ФНС России от 29.10.2014 № ММВ-7-3/558@). По обновленной форме (формату) налогоплательщики будут представлять декларацию с отчетности за 3-й квартал 2021 года.Основные изменения связаны с введением с 01.07.2021 механизма прослеживаемости товаров (Федеральный закон от 09.11.2020 № 371-ФЗ, см. подробнее) и с соответствующими поправками в правила заполнения (ведения) счетов-фактур, книг покупок и продаж, журнала учета полученных и выставленных счетов-фактур (постановление Правительства РФ от 02.04.2021 № 534, см. подробнее).В соответствии с Приказом № 228 в новой редакции изложены следующие разделы:раздел 8 «Сведения из книги покупок об операциях, отражаемых за истекший налоговый период» и Приложение 1 к разделу 8 «Сведения из дополнительных листов книги покупок»;раздел 9 «Сведения из книги продаж об операциях, отражаемых за истекший налоговый период» и Приложение 1 к разделу 9 декларации «Сведения из дополнительных листов книги продаж»;раздел 10 «Сведения из журнала учета выставленных счетов-фактур в отношении операций, осуществляемых в интересах другого лица на основе договоров комиссии, агентских договоров или на основе договоров транспортной экспедиции, отражаемых за истекший налоговый период»;раздел 11 «Сведения из журнала учета полученных счетов-фактур в отношении операций, осуществляемых в интересах другого лица на основе договоров комиссии, агентских договоров или на основе договоров транспортной экспедиции, отражаемых за истекший налоговый период».';
      $publication->author = 'Админ';
      if ($val % 2 == 0) {
        $publication->title = 'Является ли повышение окладов поводом для подачи СЗВ-ТД?';
        $publication->category = 'Новости';
      } else {
        $publication->title = 'Безналичный чек в 1С';
        $publication->category = 'Статьи';
      }
      $publication->save();
    }
    // publications <<=
    // =>> gains
    $gains = [
      'Регулярные обновления программ «1С»',
      'Доступ к информационной системе 1С:ИТС',
      'Профессиональную линию консультаций',
    ];
    foreach ($gains as $gain) {
      $table = new Gain();
      $table->description = $gain['description'];
      $table->save();
    }
    // gains <<=
    $this->call([
      NavigationsSeeder::class,
      AdvantagesSeeder::class,
      ProductsSeeder::class,
      ProjectsSeeder::class,
      CompaniesSeeder::class,
      MembersSeeder::class,
      ServicesSeeder::class,
    ]);
  }
}
