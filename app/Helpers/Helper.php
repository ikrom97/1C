<?php

/**
 * Custom helper class
 * @author Ikrom Rahimov fleck97rgb@gmail.com
 */

namespace App\Helpers;

use App\Models\Text;
use stdClass;

class Helper
{
  public static function connectPagesTexts($page)
  {
    $texts = $page->texts;

    foreach ($texts as $text) {
      if (!$text->trashed) {
        $page[$text->caption] = $text->text;
      }
    }

    return $page;
  }

  public static function connectHeadersTexts()
  {
    $header = [];

    $texts = Text::where('type', 'header')->where('trashed', false)->get();

    foreach ($texts as $text) {
      $header[$text->caption] = $text->text;
    }

    return $header;
  }

}
