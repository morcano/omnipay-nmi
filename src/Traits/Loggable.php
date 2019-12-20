<?php

namespace Omnipay\NMI\Traits;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

trait Loggable
{
    /**
     * @param $method
     * @param $url
     * @param $requestData
     * @param $httpResponse
     * @param null $responseObject
     * @throws \Exception
     */
    public function logAPICall($method, $url, $requestData, $httpResponse, $responseObject = null)
    {
        $wasCallSuccessful = $responseObject !== null && $responseObject->isSuccessful();
        if ($wasCallSuccessful && !$this->isLoggingEnabled()) {
            return;
        }
        $loggerData = [
            'request' => [
                'method' => $method,
                'url' => $url,
                'data' => $this->getScrubbedData($requestData)
            ],
            'response' => [
                'statusCode' => $httpResponse->getStatusCode(),
                'status' => $httpResponse->getReasonPhrase(),
                'body' => $this->getScrubbedData($this->JSONifyResponseBody($httpResponse->getBody(true)))
            ]
        ];
        $log = new Logger('NMI');
        $log->pushHandler(new StreamHandler(storage_path('logs/nmi.log'), Logger::INFO));
        $log->info('NMI API Call', $loggerData);
    }

    /**
     * @param $currentData
     * @return mixed
     */
    private function getScrubbedData($currentData)
    {
        $scrubbedData = $currentData;
        if (isset($currentData['password'])) {
            $scrubbedData['password'] = $this->maskNumberWithAsterisks($currentData['password']);
        }
        return $scrubbedData;
    }

    /**
     * @param $number
     * @return string
     */
    private function maskNumberWithAsterisks($number)
    {
        $number = (string)$number;
        if (strlen($number) >= 4) {
            $maskedNumber = str_repeat('*', strlen($number) - 4) . substr($number, -4);
        } else {
            return '****';
        }
        return $maskedNumber;
    }

    /**
     * @param $body
     * @return array
     */
    private function JSONifyResponseBody($body)
    {
        $bodyAsArray = [];
        parse_str($body, $bodyAsArray);
        return $bodyAsArray;
    }
}