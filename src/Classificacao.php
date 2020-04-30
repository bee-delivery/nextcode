<?php
namespace BeeDelivery\NextCode\src;

use BeeDelivery\NextCode\Connection;
use phpDocumentor\Reflection\File;

class Classificacao
{
    public $http;

    public function __construct($token)
    {
        $this->http = new Connection($token);
    }

    /**
     * Classificação de Documentos
     * Este endpoint serve para avaliar qual documento pode estar presente em uma imagem, podendo ser:
     *
     * CNH FV (cnh frente e verso)
     * CNH F (cnh somente frente)
     * CNH V (cnh somente verso)
     * RG FV (rg frente e verso)
     * RG F (rg somente frente)
     * RG V (rg somente verso)
     * CPF (Versão azul ou marrom do documento, aquela sem foto da face. Pode ser frente e verso)
     * COMPRES (comprovante de residência)
     * IMPRESSOS (Impressos em geral, pode conter assinaturas ou manuscrito)
     * CARTAOCREDITO (Cartões de crédito em geral, pode ser frente e verso)
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#classificacao-de-documentos
     * @param File file - Imagem a ser analisada
     * @return Json
     */
    public function classificacaoDocumentos($data)
    {
        return $this->http->post('https://id.nxcd.com.br/v1.0/classifier/single-file/' , ['json' => $data]);
    }

    /**
     * Classificação de Documentos (Base64)
     * Este endpoint serve para avaliar qual documento pode estar presente em uma imagem, podendo ser:
     *
     * CNH FV (cnh frente e verso)
     * CNH F (cnh somente frente)
     * CNH V (cnh somente verso)
     * RG FV (rg frente e verso)
     * RG F (rg somente frente)
     * RG V (rg somente verso)
     * CPF (Versão azul ou marrom do documento, aquela sem foto da face. Pode ser frente e verso)
     * COMPRES (comprovante de residência)
     * IMPRESSOS (Impressos em geral, pode conter assinaturas ou manuscrito)
     * CARTAOCREDITO (Cartões de crédito em geral, pode ser frente e verso)
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#classificacao-de-documentos-base64
     * @param String file - Imagem a ser analisada em formato base64
     * @return Json
     */
    public function classificacaoDocumentosBase64($data)
    {
        return $this->http->post('https://id.nxcd.com.br/v1.0/classifier/single-file-base64/' , ['json' => $data]);
    }

    /**
     * Classificação de Documentos (Base64)
     * Este endpoint serve para avaliar qual documento pode estar presente em uma imagem, podendo ser:
     *
     * CNH FV (cnh frente e verso)
     * CNH F (cnh somente frente)
     * CNH V (cnh somente verso)
     * RG FV (rg frente e verso)
     * RG F (rg somente frente)
     * RG V (rg somente verso)
     * CPF (Versão azul ou marrom do documento, aquela sem foto da face. Pode ser frente e verso)
     * COMPRES (comprovante de residência)
     * IMPRESSOS (Impressos em geral, pode conter assinaturas ou manuscrito)
     * CARTAOCREDITO (Cartões de crédito em geral, pode ser frente e verso)
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#classificacao-de-documentos-url
     * @param String url - Url da imagem a ser analisada em formato
     * @return Json
     */
    public function classificacaoDocumentosUrl($data)
    {
        return $this->http->post('https://id.nxcd.com.br/v1.0/classifier/single-file-url/' , ['json' => $data]);
    }

}
