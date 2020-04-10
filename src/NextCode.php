<?php

namespace BeeDelivery\NextCode;

use BeeDelivery\NextCode\src\Auth;
use BeeDelivery\NextCode\src\BackgroundCheck;
use BeeDelivery\NextCode\src\Biometria;
use BeeDelivery\NextCode\src\ComprovanteResidencia;
use BeeDelivery\NextCode\src\OCR;
use BeeDelivery\NextCode\src\QuatroCampos;

class NextCode
{
    public function auth($data) {
        return new Auth($data);
    }

    public function quatroCampos($token) {
        return new QuatroCampos($token);
    }

    public function ocr($token) {
        return new OCR($token);
    }

    public function comprovanteResidencia($token)
    {
        return new ComprovanteResidencia($token);
    }

    public function biometria($token)
    {
        return new Biometria($token);
    }

    public function backgroundCheck($token)
    {
        return new BackgroundCheck($token);
    }

}
