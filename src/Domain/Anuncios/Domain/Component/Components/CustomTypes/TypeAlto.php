<?php
/**
 * Created by PhpStorm.
 * User: Jorge Gonzalez
 * Date: 06/09/2018
 * Time: 20:22
 */
    
    namespace App\Domain\Anuncios\Domain\Component\Components\CustomTypes;


use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class TypeAlto extends Type
{
    const NAME = 'TypeAlto';
    
    
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        // TODO: Implement getSQLDeclaration() method.
    }
    
    public function getName()
    {
        
        return self::NAME;
    }
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return $this->name;
    }
}