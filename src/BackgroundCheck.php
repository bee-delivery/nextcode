<?php
namespace BeeDelivery\NextCode\src;

use BeeDelivery\NextCode\Connection;
use phpDocumentor\Reflection\File;

class BackgroundCheck
{
    public $http;

    public function __construct($token)
    {
        $this->http = new Connection($token);
    }

    /**
     * Backgroundcheck Por Imagem
     * Este endpoint serve para avaliar documentos que possuem face, cpf e sejam válidos, tais como RG, documentos de ordem, militares, etc, retornanado os dados de background check da Neoway.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#backgroundcheck-por-imagem
     * @param File file - Imagem do documento contendo a frente e o verso
     * @return Array
     */
    public function backgroundcheckImagem($data)
    {
        return $this->http->post('https://idneowaycheck.nxcd.com.br/api/background-check/one-file/', ['json' => $data]);
    }

    /**
     * Backgroundcheck Por Imagem (URL)
     * Este endpoint serve para avaliar documentos que possuem face, cpf e sejam válidos, tais como RG, documentos de ordem, militares, etc, retornanado os dados de background check da Neoway.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#backgroundcheck-por-imagem-url
     * @param String url - Url do documento contendo a frente e o verso
     * @return Array
     */
    public function backgroundcheckImagemUrl($data)
    {
        return $this->http->post('https://idneowaycheck.nxcd.com.br/api/background-check/one-file-url/', ['json' => $data]);
    }

    /**
     * Backgroundcheck - CPF (somente dados)
     * Este endpoint serve para receber os dados de background check provenientes da Neoway, utilizando somente um cpf como parâmetro.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#backgroundcheck-cpf-somente-dados
     * @return Json
     */
    public function backgroundcheckCpf($cpf)
    {
        return $this->http->get('https://id.nxcd.com.br/v1.0/background-check/by-cpf/'.$cpf);
    }

    /**
     * Backgroundcheck - CNPJ (somente dados)
     * Este endpoint serve para receber os dados de background check provenientes da Neoway, utilizando somente um cnpj como parâmetro.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#backgroundcheck-cnpj-somente-dados
     * @return Json
     */
    public function backgroundcheckCnpj($cnpj)
    {
        return $this->http->get('https://id.nxcd.com.br/v1.0/background-check/by-cnpj/'.$cnpj);
    }

    /**
     * Este endpoint serve para buscar processos nos tribunais brasileiros a partir de um CPF.
     * Serão buscados processos onde a pessoa solicitada é a parte passiva (réu).
     *
     * @see https://docs.nxcd.com.br/#processos-pf
     * @param String cpf - CPF da pessoa que você dejesa buscar os processos (obrigatório)
     * @param Boolean getDetail - Quando "true" irá retornar informações sobre os processos, quando "false" retorna somente os contadores (opcional, default false)
     * @param Array filters - Array de termos (string) para serem utilizados como filtro. Quando utilizado mais de um termo, será aplicada condicional OR (opcional)
     * @return Json
     */

    public function processosPF($data)
    {
        return $this->http->post('https://id.nxcd.com.br/v1.0/background-check/processos-pf/', ['json' => $data]);
    }
}
