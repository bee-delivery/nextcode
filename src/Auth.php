<?php

namespace BeeDelivery\NextCode\src;



use BeeDelivery\NextCode\Connection;

class Auth
{

    public $http;
    protected $token;

    public function __construct()
    {
        $this->http = new Connection();
    }

    /**
     * Faz login e recupera o access token para uso na API.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#autenticacao
     * @param String email
     * @param String senha
     * @return String
     */
    public function login($data)
    {
        return $this->http->post('v1.0/login/', ['json' => $data]);
    }

}
