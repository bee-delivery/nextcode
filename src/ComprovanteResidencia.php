<?php
namespace BeeDelivery\NextCode\src;

use BeeDelivery\NextCode\Connection;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use phpDocumentor\Reflection\File;

class ComprovanteResidencia
{
    public $http;

    public function __construct($token)
    {
        $this->http = new Connection($token);
    }

    /**
     * Comprovante de Residência
     * Este endpoint serve para avaliar comprovantes de residência, não são levados em consideração o código de barras, data de vencimento e número de instalação.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comprovante-de-residencia-2
     * @param String cpf - CPF do proponente
     * @param File file - Imagem ou PDF do comprovante de residência
     * @return Json
     */
    public function comprovanteResidencia($data)
    {
        return $this->http->post('v1.0/proof-of-residence/single-file/', ['json' => $data]);
    }

    /**
     * Comprovante de Residência (URL)
     * Este endpoint serve para avaliar comprovantes de residência, não são levados em consideração o código de barras, data de vencimento e número de instalação.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comprovante-de-residencia-url
     * @param String cpf - CPF do proponente
     * @param Url url - URL da Imagem ou PDF do comprovante de residência
     * @return Json
     */
    public function comprovanteResidenciaUrl($data)
    {
        return $this->http->post('v1.0/proof-of-residence/single-file-url/', ['json' => $data]);
    }

    /**
     * Comprovante de Residência (Base64)
     * Este endpoint serve para avaliar comprovantes de residência, não são levados em consideração o código de barras, data de vencimento e número de instalação.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comprovante-de-residencia-base64
     * @param String cpf - CPF do proponente
     * @param File url - Base64 da Imagem do comprovante de residência
     * @return Json
     */
    public function comprovanteResidenciaBase64($data)
    {
        return $this->http->post('v1.0/proof-of-residence/single-file-base64/', ['json' => $data]);
    }

    /**
     * Comprovante de Residência Digitado
     * Este endpoint serve para avaliar comprovantes de residência, não são levados em consideração o código de barras, data de vencimento e número de instalação.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comprovante-de-residencia-digitado
     * @param String cpf - CPF do proponente
     * @param String name - Nome do proponente
     * @param String address - Logradouro do proponente contento tipo e título. Ex: Rua Pres. Juscelino Kubitschek
     * @param String number - Número do logradouro
     * @param String complement - Complemento do logradouro. Ex: apto 10
     * @param String neighborhood - Bairro
     * @param String city - Cidade
     * @param String state - UF
     * @param String zipcode - CEP
     * @param File file - Imagem ou PDF do comprovante de residência
     * @return Json
     */
    public function comprovanteResidenciaDigitado($data)
    {
        return $this->http->post('v1.0/proof-of-residence/single-file-form/', ['json' => $data]);
    }


    /**
     * Comprovante de Residência Digitado (URL)
     * Este endpoint serve para avaliar comprovantes de residência, não são levados em consideração o código de barras, data de vencimento e número de instalação.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comprovante-de-residencia-digitado-url
     * @param String cpf - CPF do proponente
     * @param String name - Nome do proponente
     * @param String address - Logradouro do proponente contento tipo e título. Ex: Rua Pres. Juscelino Kubitschek
     * @param String number - Número do logradouro
     * @param String complement - Complemento do logradouro. Ex: apto 10
     * @param String neighborhood - Bairro
     * @param String city - Cidade
     * @param String state - UF
     * @param String zipcode - CEP
     * @param Url url - URL da Imagem ou PDF do comprovante de residência
     * @return Json
     */
    public function comprovanteResidenciaDigitadoUrl($data)
    {
        return $this->http->post('v1.0/proof-of-residence/single-file-url-form/', ['json' => $data]);
    }

    /**
     * Comprovante de Residência Digitado (Base64)
     * Este endpoint serve para avaliar comprovantes de residência, não são levados em consideração o código de barras, data de vencimento e número de instalação.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comprovante-de-residencia-digitado-base64
     * @param String cpf - CPF do proponente
     * @param String name - Nome do proponente
     * @param String address - Logradouro do proponente contento tipo e título. Ex: Rua Pres. Juscelino Kubitschek
     * @param String number - Número do logradouro
     * @param String complement - Complemento do logradouro. Ex: apto 10
     * @param String neighborhood - Bairro
     * @param String city - Cidade
     * @param String state - UF
     * @param String zipcode - CEP
     * @param String file - Imagem do comprovante de residência em formato base64
     * @return Json
     */
    public function comprovanteResidenciaDigitadoBase64($data)
    {
        return $this->http->post('v1.0/proof-of-residence/single-file-base64-form/', ['json' => $data]);
    }

}
