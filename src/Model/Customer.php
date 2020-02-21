<?php

namespace Src\Model;

use Src\Lib\Connect;

class Customer
{
    use Connect;

    static function create(array $params)
    {
        return self::postRequest("/create-customer", $params);
    }
}