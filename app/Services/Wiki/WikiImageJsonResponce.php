<?php

namespace App\Services\Wiki;

class WikiImageJsonResponce
{

    public static function getResponceImage($pageTitles, $language)
    {
        $response = self::getResponce($pageTitles, $language);

        foreach ($response->query->pages as $key => $value) {
            $image["{$value->title}"] = isset($value->thumbnail) ? self::getImage($value) : '';
        }
        return $image;

    }

    private static function getResponce($pageTitles, $language)
    {
        $url = "https://{$language}.wikipedia.org/w/api.php?"
            . "action=query"
            . "&prop=pageimages"
            . "&format=json"
            . "&titles={$pageTitles}"
            . "&pithumbsize=400";

        $jsonResponse = file_get_contents($url);
        return json_decode($jsonResponse);
    }

    private static function getImage($value)
    {
        return $value->thumbnail->source;
    }
}
