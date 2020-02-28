<?php

use Src\Model\Customer;

require __DIR__ . '/vendor/autoload.php';

/*print_r(Customer::create(["name" => "Pauuz",
    "phone_number" => "0752344567",
    "type" => "individual",
    "institution_customer_id" => 12, "date_of_birth" => "2001-09-00"]));*/

/*print_r(\Src\Model\User::create([
    "name" => "BorrowerCentral"
]));*/

\RiskPile\Lib\RiskPile::setApiKey("212475-04baf3-b82ee9-74ef45-c3a02e");

/*print_r(\Src\Model\Loan::createApplication([
    "institution_customer_id"
]));*/




echo "\n";