<?php


namespace Src\Lib;


class RiskPile
{
    public static $apiKey;

    static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }
}