<?php

namespace aryraditya\Shipper;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use function GuzzleHttp\Psr7\str;
use Psr\Http\Message\ResponseInterface;

class Request
{

    private $baseUrl;

    private $key;

    private $throwErrors;

    public function __construct($key, $baseUrl, $throwErrors = false) {
        $this->key = $key;
        $this->baseUrl = $this->parseUrl($baseUrl, '/');
        $this->throwErrors = $throwErrors;
    }

    public function request($method, $action, $data = []) {
        $method     = strtolower($method);
        $client     = $this->client();
        $response   = null;
        $options    = [
            'query' => [
                'apiKey' => $this->key
            ]
        ];

        foreach ($data as &$value) {
            if ($value instanceof \DateTime) {
                $value = $value
                    ->setTimezone(new \DateTimeZone('Asia/Jakarta'))
                    ->format('Y-m-d H:i:s');
            }
        }
        unset($value);

        if(in_array($method, ['head', 'get'])) {
            $options['query'] = array_merge($options['query'], $data );
        } else {
            $options['form_params'] = $data;
        }

        try {
            $response    = $client->request($method, $action, $options);
        } catch(RequestException $e) {
            $response    = $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null;
          
            if ($this->throwErrors) {
                throw $response ? new Exception($response) : $e;
            } else {
                $this->writeLog($method, $data, $e, $response);
            }
        }

        return $this->parseResponse($response);
    }

    /**
     * @param ResponseInterface|\GuzzleHttp\Psr7\Response $response
     *
     * @return string
     */
    private function parseResponse($response)
    {
        $res = $response ?: '{"status": "fail"}';

        if($response instanceof ResponseInterface || $response instanceof \GuzzleHttp\Psr7\Response)
            $res = $response->getBody()->getContents();

        return json_decode($res);
    }

    protected function writeLog($method, $data, $exception, $response = null)
    {
        \Log::error([
            'shipper-request' => [
                'url' => (string) $exception->getRequest()->getUri(),
                'method' => $method,
                'data'  => $data
            ],
            'shipper-response'  => $response,
        ]);
    }

    protected function parseUrl($value, $cap)
    {
        $quoted = preg_quote($cap, '/');

        return preg_replace('/(?:'.$quoted.')+$/u', '', $value).$cap;
    }

    protected function client() {
        $client = new Client([
            'base_uri'  => $this->baseUrl,
            'query'     => [
                'apiKey'    => $this->key
            ],
            'headers'   => [
                'User-Agent'    => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36'
            ]
        ]);

        return $client;
    }
}