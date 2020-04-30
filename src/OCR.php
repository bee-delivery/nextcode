<?php
namespace BeeDelivery\NextCode\src;

use BeeDelivery\NextCode\Connection;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use phpDocumentor\Reflection\File;

class OCR
{
    public $http;

    public function __construct($token)
    {
        $this->http = new Connection($token);
    }

    /**
     * Este endpoint serve para classificar o documento contido na imagem e extrair seus dados. Os tipos de documentos analisados podem ser:
     *  CNH FV (cnh frente e verso)
     *  CNH F (cnh somente frente)
     *  RG FV (rg frente e verso)
     *  RG V (rg somente verso)
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#generica
     * @param File file - Imagem ou PDF do documento
     * @return Json
     */
    public function generica($data)
    {
        return $this->http->post('https://id.nxcd.com.br/v1.0/id/extract-all-single-file/', ['json' => $data]);
    }

    /**
     * Este endpoint serve para classificar o documento contido na imagem e extrair seus dados. Os tipos de documentos analisados podem ser:
     *  CNH FV (cnh frente e verso)
     *  CNH F (cnh somente frente)
     *  RG FV (rg frente e verso)
     *  RG V (rg somente verso)
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#generica-base64
     * @param String file - Imagem ou PDF do documento em formato base64 (sem mimetype)
     * @return Json
     */
    public function genericaBase64($data)
    {
        return $this->http->post('https://id.nxcd.com.br/v1.0/id/extract-all-single-file-base64/', ['json' => $data]);
    }

    /**
     * Este endpoint serve para classificar o documento contido na imagem e extrair seus dados. Os tipos de documentos analisados podem ser:
     *  CNH FV (cnh frente e verso)
     *  CNH F (cnh somente frente)
     *  RG FV (rg frente e verso)
     *  RG V (rg somente verso)
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#generica-url
     * @param Url url - URL da imagem ou PDF do documento
     * @return Json
     */
    public function genericaUrl($data)
    {
        return $this->http->post('https://id.nxcd.com.br/v1.0/id/extract-all-single-file-url/', ['json' => $data]);
    }

    /**
     * Este endpoint serve para classificar o documento contido na imagem e extrair seus dados. Os tipos de documentos analisados podem ser:
     *  CNH FV (cnh frente e verso)
     *  CNH F (cnh somente frente)
     *  RG FV (rg frente e verso)
     *  RG V (rg somente verso)
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#generica
     * @param File file1 - Imagem ou PDF do documento
     * @param File file2 - Imagem ou PDF do documento
     * @return Json
     */
    public function genericaDoisArquivos($data)
    {
        return $this->http->post('https://id.nxcd.com.br/v1.0/id/extract-all-two-files/', ['json' => $data]);
    }

    /**
     * Este endpoint serve para classificar o documento contido na imagem e extrair seus dados. Os tipos de documentos analisados podem ser:
     *  CNH FV (cnh frente e verso)
     *  CNH F (cnh somente frente)
     *  RG FV (rg frente e verso)
     *  RG V (rg somente verso)
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#generica-dois-arquivos-base64
     * @param String file1 - Imagem ou PDF do documento em formato base64 (sem mimetype)
     * @param String file2 - Imagem ou PDF do documento em formato base64 (sem mimetype)
     * @return Json
     */
    public function genericaDoisArquivosBase64($data)
    {
        return $this->http->post('https://id.nxcd.com.br/v1.0/id/extract-all-two-files-base64/', ['json' => $data]);
    }

    /**
     * Este endpoint serve para classificar o documento contido na imagem e extrair seus dados. Os tipos de documentos analisados podem ser:
     *  CNH FV (cnh frente e verso)
     *  CNH F (cnh somente frente)
     *  RG FV (rg frente e verso)
     *  RG V (rg somente verso)
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#generica-url
     * @param Url url1 - URL da imagem ou PDF do documento
     * @param Url url2 - URL da imagem ou PDF do documento
     * @return Json
     */
    public function genericaDoisArquivosUrl($data)
    {
        return $this->http->post('https://id.nxcd.com.br/v1.0/id/extract-all-two-files-url/', ['json' => $data]);
    }

}
