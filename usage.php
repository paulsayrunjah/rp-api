<?php

use Src\Model\Customer;

require __DIR__ . '/vendor/autoload.php';

print_r(Customer::create(["name" => "Pauuz",
    "phone_number" => "0752344567",
    "type" => "individual",
    "institution_customer_id" => 12, "date_of_birth" => "2001-09-00"]));
echo "\n";