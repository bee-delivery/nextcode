<?php
namespace BeeDelivery\NextCode\src;

use BeeDelivery\NextCode\Connection;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use phpDocumentor\Reflection\File;

class QuatroCampos
{
    public $http;

    public function __construct($token)
    {
        $this->http = new Connection($token);
    }

    /**
     * Este endpoint serve para clsssificar, obter os dados e validar os mesmos juntos aos bueraus ou bases públicas.
     * Este endpoint aceita documentos com CPF e face, que sejam válidos, tais como RG, documentos de ordem, militares, etc.
     * A validação com bases públicas se dá através do nome, nome da mãe, data de nascimento e CPF.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#arquivo-unico
     * @param File file - Imagem ou PDF do documento de identificação
     * @param String cpf - CPF do portador caso documento seja um RG sem CPF preenchido (Opcional)
     * @param Boolean prepareForDatavalid - Solicita tratamento especial da face, retorna parâmetro face.croppedFaceBase64 preparado para ser enviado ao Datavalid da Serpro (Opcional, default false)
     * @return Json
     */
    public function arquivoUnico($data)
    {
        return $this->http->get('https://idhomolog.nxcd.com.br/v1.0/id/single-file/', ['json' => $data]);
    }

    /**
     * Este endpoint serve para clsssificar, obter os dados e validar os mesmos juntos aos bueraus ou bases públicas.
     * Este endpoint aceita documentos com CPF e face, que sejam válidos, tais como RG, documentos de ordem, militares, etc.
     * A validação com bases públicas se dá através do nome, nome da mãe, data de nascimento e CPF.
     *
     * @see https://docshomolog.nxcd.com.br/?javascript#arquivo-unico-base64
     * @param File file - Imagem ou PDF do documento de identificação
     * @param String cpf - CPF do portador caso documento seja um RG sem CPF preenchido (Opcional)
     * @param Boolean prepareForDatavalid - Solicita tratamento especial da face, retorna parâmetro face.croppedFaceBase64 preparado para ser enviado ao Datavalid da Serpro (Opcional, default false)
     * @return Json
     */
    public function arquivoUnicoBase64($data)
    {
        return $this->http->get('https://idhomolog.nxcd.com.br/v1.0/id/single-file-base64/', ['json' => $data]);
    }

    /**
     * Este endpoint serve para clsssificar, obter os dados e validar os mesmos juntos aos bueraus ou bases públicas.
     * Este endpoint aceita documentos com CPF e face, que sejam válidos, tais como RG, documentos de ordem, militares, etc.
     * A validação com bases públicas se dá através do nome, nome da mãe, data de nascimento e CPF.
     *
     * @see POST https://idhomolog.nxcd.com.br/v1.0/id/single-file-url/
     * @param Url url - Url da imagem ou PDF do documento de identificação
     * @param String cpf - CPF do portador caso documento seja um RG sem CPF preenchido (Opcional)
     * @param Boolean prepareForDatavalid - Solicita tratamento especial da face, retorna parâmetro face.croppedFaceBase64 preparado para ser enviado ao Datavalid da Serpro (Opcional, default false)
     * @return Json
     */
    public function arquivoUnicoUrl($data)
    {
        return $this->http->get('https://idhomolog.nxcd.com.br/v1.0/id/single-file-url/', ['json' => $data]);
    }

    /**
     * Este endpoint serve para clsssificar, obter os dados e validar os mesmos juntos aos bueraus ou bases públicas.
     * Este endpoint aceita documentos com CPF e face, que sejam válidos, tais como RG, documentos de ordem, militares, etc.
     * A validação com bases públicas se dá através do nome, nome da mãe, data de nascimento e CPF.
     *
     * @see POST https://idhomolog.nxcd.com.br/v1.0/id/two-files/
     * @param File file1 - Imagem ou PDF do documento de identificação, pode ser a frente ou o verso
     * @param File file2 - Imagem ou PDF do documento de identificação, pode ser a frente ou o verso
     * @param String cpf - CPF do portador caso documento seja um RG sem CPF preenchido (Opcional)
     * @param Boolean prepareForDatavalid - Solicita tratamento especial da face, retorna parâmetro face.croppedFaceBase64 preparado para ser enviado ao Datavalid da Serpro (Opcional, default false)
     * @return Json
     */
    public function doisArquivos($data)
    {
        return $this->http->get('https://idhomolog.nxcd.com.br/v1.0/id/two-files/', ['json' => $data]);
    }

    /**
     * Este endpoint serve para clsssificar, obter os dados e validar os mesmos juntos aos bueraus ou bases públicas.
     * Este endpoint aceita documentos com CPF e face, que sejam válidos, tais como RG, documentos de ordem, militares, etc.
     * A validação com bases públicas se dá através do nome, nome da mãe, data de nascimento e CPF.
     *
     * @see POST POST https://idhomolog.nxcd.com.br/v1.0/id/two-files-base64/
     * @param File file1 - Imagem ou PDF do documento de identificação, pode ser a frente ou o verso
     * @param File file2 - Imagem ou PDF do documento de identificação, pode ser a frente ou o verso
     * @param String cpf - CPF do portador caso documento seja um RG sem CPF preenchido (Opcional)
     * @param Boolean prepareForDatavalid - Solicita tratamento especial da face, retorna parâmetro face.croppedFaceBase64 preparado para ser enviado ao Datavalid da Serpro (Opcional, default false)
     * @return Json
     */
    public function doisArquivosBase64($data)
    {
        return $this->http->get('https://idhomolog.nxcd.com.br/v1.0/id/two-files-base64/', ['json' => $data]);
    }

    /**
     * Este endpoint serve para clsssificar, obter os dados e validar os mesmos juntos aos bueraus ou bases públicas.
     * Este endpoint aceita documentos com CPF e face, que sejam válidos, tais como RG, documentos de ordem, militares, etc.
     * A validação com bases públicas se dá através do nome, nome da mãe, data de nascimento e CPF.
     *
     * @see POST POST https://idhomolog.nxcd.com.br/v1.0/id/two-files-base64/
     * @param Url url1 - Url da Imagem ou PDF do documento de identificação, pode ser a frente ou o verso
     * @param Url url2 - Url da Imagem ou PDF do documento de identificação, pode ser a frente ou o verso
     * @param String cpf - CPF do portador caso documento seja um RG sem CPF preenchido (Opcional)
     * @param Boolean prepareForDatavalid - Solicita tratamento especial da face, retorna parâmetro face.croppedFaceBase64 preparado para ser enviado ao Datavalid da Serpro (Opcional, default false)
     * @return Json
     */
    public function doisArquivosUrl($data)
    {
        return $this->http->get('https://idhomolog.nxcd.com.br/v1.0/id/two-files-url/', ['json' => $data]);
    }
}
