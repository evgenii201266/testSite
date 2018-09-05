<?php

namespace App\Services\Quotes;

class Content
{
    public static function getContent()
    {
      $url = 'https://api.forismatic.com/api/1.0/?method=getQuote&format=json&jsonp=parseQuote';
      $response = file_get_contents($url);
      return isset($response) ? $response :exit;
    }
}
