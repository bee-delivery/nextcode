<?php

namespace BeeDelivery\NextCode;

use GuzzleHttp\Client;

class Connection {

    protected $http;
    protected $base_url;
    protected $email;
    protected $senha;
    protected $token;

    public function __construct($token = null) {

        $this->base_url     = config('nextcode.base_url');
        $this->token        = $token;

        $headers = [
            'x-access-token' => $token,
        ];

        $this->http = new Client([
            'headers' => $headers
        ]);

        return $this->http;
    }

    public function get($url)
    {
        try {
            $response = $this->http->get($this->base_url . $url);
            return [
                'code'     => $response->getStatusCode(),
                'response' => json_decode($response->getBody()->getContents())
            ];
        } catch (\Exception $e){
            return [
                'code'     => $e->getCode(),
                'response' => $e->getResponse()->getBody()->getContents()
            ];
        }
    }

    public function post($url, $params)
    {
        try {
            $response = $this->http->post($this->base_url . $url, $params);

            return [
                'code'     => $response->getStatusCode(),
                'response' => json_decode($response->getBody()->getContents())
            ];

        } catch (\Exception $e){
            return [
                'code'     => $e->getCode(),
                'response' => $e->getResponse()->getBody()->getContents()
            ];
        }
    }

    public function put($url, $params)
    {

        try {
            $response = $this->http->put($this->base_url . $url, $params);

            return [
                'code'     => $response->getStatusCode(),
                'response' => json_decode($response->getBody()->getContents())
            ];

        } catch (\Exception $e){

            return [
                'code'     => $e->getCode(),
                'response' => $e->getResponse()->getBody()->getContents()
            ];
        }
    }
}
