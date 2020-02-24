<?php
namespace Src\Lib;

use Exception;
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
            $formParams["api_key"] = getApiKey();
            $request = $client->request('POST', self::baseUrl().$endPoint, [
                "form_params" => $formParams
            ]);

            return $request->getBody()->getContents();

        }catch (Exception $exception) {
            $error = $exception->getMessage();
        }
        return $error;
    }

    static function getRequest($endPoint, $params)
    {
        $client = new Client();
        $error = null;
        try{
            $formParams["api_key"] = getApiKey();
            $request = $client->request('POST', $endPoint, [
                "query" => $params
            ]);

            return $request->getBody()->getContents();

        }catch (Exception $exception) {
            $error = $exception;
        }
        return $error;
    }
}
