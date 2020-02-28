<?php

namespace RiskPile\Model;

use RiskPile\Lib\Connect;

class Customer
{
    use Connect;

    static function create(array $params)
    {
        return self::postRequest("/create-customer", $params);
    }
}