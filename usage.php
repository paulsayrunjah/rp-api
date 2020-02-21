<?php

use Src\Model\Customer;

require __DIR__ . '/vendor/autoload.php';

print_r(Customer::create(["name" => "Pauuz", "phone_number" => "0752344567"]));
echo "\n";