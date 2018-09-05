<?php

namespace App\Services\Wiki;

class ChoiceLanguage
{
    public static function choiceLanguage($search)
    {
        return $result = (preg_match("/[а-яА-яёЁ+]/", $search)) ? self::ruLanguage() : self::enLanguage();
    }

    private static function ruLanguage()
    {
        return $language = 'ru';
    }

    private static function enLanguage()
    {
        return $language = 'en';
    }
}
