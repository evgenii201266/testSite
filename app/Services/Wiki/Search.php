<?php

namespace App\Services\Wiki;

class Search
{
    public static function wikipediaSearch($search, $language, $maxCountMath)
    {
        $content = WikiTextJsonResponce::getResponceText($search, $language, $maxCountMath);

        $countTitlePages = count($content[1]);

        if ($countTitlePages > 0) {
            $pageTitles = self::strFormat($content[1]);
            $content['images'] = WikiImageJsonResponce::getResponceImage($pageTitles, $language);
        }
        return $content;
    }


    private static function strFormat(array $subject)
    {
        $search = [' ', '+', '&'];
        $replace = ['%20', '%2B', '%26'];

        return implode("%7C", str_replace($search, $replace, $subject));
    }

}
