<?php
namespace BeeDelivery\NextCode\src;

use BeeDelivery\NextCode\Connection;
use phpDocumentor\Reflection\File;

class Biometria
{

    public $http;

    public function __construct($token)
    {
        $this->http = new Connection($token);
    }

    /**
     * Comparação Biométrica
     * Este endpoint serve para comparar uma selfie com a foto de um documento de identificação. Não deve ser usado para realização de biometria.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comparacao-biometrica
     * @param File doc - Imagem ou PDF do documento de identificação com foto
     * @param File selfie - Selfie do proponente
     * @return Json
     */
    public function comparacaoBiometrica($data)
    {
        return $this->http->post('https://idhomolog.nxcd.com.br/v1.0/bio/face-compare/', ['json' => $data]);
    }

    /**
     * Comparação Biométrica (Base64)
     * Este endpoint serve para comparar uma selfie com a foto de um documento de identificação. Não deve ser usado para realização de biometria.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comparacao-biometrica-base64
     * @param String img1 - Imagem do documento de identificação com foto ou selfie em formato base64
     * @param String img2 - Imagem do documento de identificação com foto ou selfie em formato base64
     * @return Json
     */
    public function comparacaoBiometricaBase64($data)
    {
        return $this->http->post('https://idhomolog.nxcd.com.br/v1.0/bio/face-compare-base64/', ['json' => $data]);
    }

    /**
     * Comparação Biométrica (Url)
     * Este endpoint serve para comparar uma selfie com a foto de um documento de identificação. Não deve ser usado para realização de biometria.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comparacao-biometrica-base64
     * @param String url1 - Url da imagem do documento de identificação com foto ou selfie
     * @param String url2 - Url da imagem do documento de identificação com foto ou selfie
     * @return Json
     */
    public function comparacaoBiometricaUrl($data)
    {
        return $this->http->post('https://idhomolog.nxcd.com.br/v1.0/bio/face-compare-url/', ['json' => $data]);
    }


    /**
     * Comparação Biométrica V2
     * Este endpoint serve para comparar uma selfie com a foto de um documento de identificação. Não deve ser usado para realização de biometria.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comparacao-biometrica-v2
     * @param File img1 - Imagem do documento de identificação com foto ou selfie
     * @param File img2 - Imagem do documento de identificação com foto ou selfie
     * @return Json
     */
    public function comparacaoBiometricaV2($data)
    {
        return $this->http->post('https://idhomolog.nxcd.com.br/v1.0/bio/new-face-compare/', ['json' => $data]);
    }

    /**
     * Comparação Biométrica V2 (Base64)
     * Este endpoint serve para comparar uma selfie com a foto de um documento de identificação. Não deve ser usado para realização de biometria.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comparacao-biometrica-v2-base64
     * @param String img1 - Imagem do documento de identificação com foto ou selfie em formato base64
     * @param String img2 - Imagem do documento de identificação com foto ou selfie em formato base64
     * @return Json
     */
    public function comparacaoBiometricaBase64V2($data)
    {
        return $this->http->post('https://idhomolog.nxcd.com.br/v1.0/bio/new-face-compare-base64/', ['json' => $data]);
    }

    /**
     * Comparação Biométrica V2 (Url)
     * Este endpoint serve para comparar uma selfie com a foto de um documento de identificação. Não deve ser usado para realização de biometria.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comparacao-biometrica-v2-url
     * @param String url1 - Url da imagem do documento de identificação com foto ou selfie
     * @param String url2 - Url da imagem do documento de identificação com foto ou selfie
     * @return Json
     */
    public function comparacaoBiometricaUrlV2($data)
    {
        return $this->http->post('https://idhomolog.nxcd.com.br/v1.0/bio/new-face-compare-url/', ['json' => $data]);
    }

    /**
     * Comparação Biométrica Datavalid
     * Este endpoint serve para comparar uma selfie com a foto de um documento de identificação. Não deve ser usado para realização de biometria.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comparacao-biometrica-datavalid
     * @param File img1 - Imagem do documento de identificação com foto ou selfie
     * @param File img2 - Imagem do documento de identificação com foto ou selfie
     * @param String cpf - CPF da pessoa a ser analisada
     * @param String id - Indica se a api deve usar a face no documento de identificação para biometria da Serpre (opcional, sendo a selfie como padrão)
     * @return Json
     */
    public function comparacaoBiometricaDatavalid($data)
    {
        return $this->http->post('https://idhomolog.nxcd.com.br/v1.0/bio/compare-datavalid/', ['json' => $data]);
    }

    /**
     * Comparação Biométrica Datavalid (Base64)
     * Este endpoint serve para comparar uma selfie com a foto de um documento de identificação. Não deve ser usado para realização de biometria.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comparacao-biometrica-datavalid-base64
     * @param File img1 - Imagem do documento de identificação com foto ou selfie em formato base64
     * @param File img2 - Imagem do documento de identificação com foto ou selfie em formato base64
     * @param String cpf - CPF da pessoa a ser analisada
     * @param String id - Indica se a api deve usar a face no documento de identificação para biometria da Serpre (opcional, sendo a selfie como padrão)
     * @return Json
     */
    public function comparacaoBiometricaDatavalidBase64($data)
    {
        return $this->http->post('https://idhomolog.nxcd.com.br/v1.0/bio/compare-datavalid-base64/', ['json' => $data]);
    }


    /**
     * Comparação Biométrica Datavalid (Url)
     * Este endpoint serve para comparar uma selfie com a foto de um documento de identificação. Não deve ser usado para realização de biometria.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#comparacao-biometrica-datavalid-url
     * @param String url1 - Imagem do documento de identificação com foto ou selfie em formato base64
     * @param String url2 - Imagem do documento de identificação com foto ou selfie em formato base64
     * @param String cpf - CPF da pessoa a ser analisada
     * @param String id - Indica se a api deve usar a face no documento de identificação para biometria da Serpre (opcional, sendo a selfie como padrão)
     * @return Json
     */
    public function comparacaoBiometricaDatavalidUrl($data)
    {
        return $this->http->post('https://idhomolog.nxcd.com.br/v1.0/bio/compare-datavalid-url/', ['json' => $data]);
    }
}
