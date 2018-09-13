<?php
/**
 * Created by PhpStorm.
 * User: Jorge Gonzalez
 * Date: 06/09/2018
 * Time: 20:26
 */

namespace App\IO\UuidGenerator;


class UUid extends \Ramsey\Uuid\Uuid  implements \App\Domain\Anuncios\Domain\AnuncioDomain\UUid
{
    
    public static function   generateUuid()
    {

        return  \Ramsey\Uuid\Uuid::uuid1();
    }
}