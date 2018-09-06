<?php
/**
 * Created by PhpStorm.
 * User: Jorge Gonzalez
 * Date: 06/09/2018
 * Time: 20:26
 */
namespace App\IO\UuidGenerator;

use App\Domain\Anuncios\Domain\Anuncio\UuidAnuncio;

class UUid  implements UuidAnuncio
{

    public function generateUuid()
    {
        $data = random_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));    }
}