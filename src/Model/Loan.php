<?php


namespace Src\Model;


use Src\Lib\Connect;

class Loan
{
    use connect;

    static function createApplication(array $params)
    {
        return self::postRequest("/loan/create-application", $params);
    }

    static function createRunningLoan(array $params)
    {
        return self::postRequest("/loan/create-running-loan", $params);
    }

    static function createLoanSchedule(array $params)
    {
        return self::postRequest("/loan/create-loan-schedule", $params);
    }
}