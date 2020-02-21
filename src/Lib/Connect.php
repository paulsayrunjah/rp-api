<?php
namespace Src\Lib;

use GuzzleHttp\Client;

trait Connect
{
    static function baseUrl()
    {
      return "http://localhost/riskpile/public/api";
    }

    static function postRequest($endPoint, $formParams)
    {
        $client = new Client();
        $error = null;
        try{
            $request = $client->request('POST', self::baseUrl().$endPoint, [
                "headers" => [
                    "Authorization" => ""
                ],
                "form_params" => $formParams
            ]);

            return $request->getBody()->getContents();

        }catch (Exception $exception) {
            $error = $exception;
        }
        return $error;
    }

    static function getRequest($endPoint, $params)
    {
        $client = new Client();
        $error = null;
        try{
            $request = $client->request('POST', $endPoint, [
                "headers" => [
                    "Authorization" => ""
                ],
                "query" => $params
            ]);

            return $request->getBody()->getContents();

        }catch (Exception $exception) {
            $error = $exception;
        }
        return $error;
    }
}
