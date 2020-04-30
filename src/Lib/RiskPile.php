<?php


namespace Src\Lib;


class RiskPile
{
    public static $apiKey;
    public static $url;

    static function setUrl($url)
    {
        self::$url = $url;
    }

    static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }
}