<?php
/**
 * Created by PhpStorm.
 * User: Jorge Gonzalez
 * Date: 06/09/2018
 * Time: 20:26
 */

namespace App\IO\UuidGenerator;

use App\Domain\Anuncios\Domain\Anuncio\UuidAnuncio;

class UUid implements \App\Domain\Anuncios\Domain\AnuncioDomain\UuidAnuncio
{
    public function __construct()
    {
        $this->id = $this->generateUuid();
    }

    public function generateUuid()
    {

        $uuid1 = \Ramsey\Uuid\Uuid::uuid1();
        return $uuid1->toString();
    }
}