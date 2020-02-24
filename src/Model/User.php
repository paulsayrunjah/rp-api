<?php

namespace Src\Model;

use Src\Lib\Connect;

class User
{
    use connect;

    static function create(array $params)
    {
        return self::postRequest("/create-user", $params);
    }

    static function getDetails()
    {
        return self::postRequest("/user-details", []);
    }

    static function test()
    {
        print_r(getApiKey());
    }

}