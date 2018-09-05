<?php

namespace App\Services\Wiki;

class WikiTextJsonResponce
{
    public static function getResponceText($search, $language, $number)
    {
        $url = "https://{$language}.wikipedia.org/w/api.php?"
            . "action=opensearch"
            . "&format=json"
            . "&search={$search}"
            . "&limit={$number}";

        $jsonResponse = file_get_contents($url);
        $response = json_decode($jsonResponse);
        return self::titlesPage($response);
    }

    private static function titlesPage($content)
    {
        return  isset($content[1]) ? $content : exit;
    }

}
