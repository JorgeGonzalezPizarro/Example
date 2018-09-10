<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 10/09/2018
 * Time: 19:59
 */

namespace App\Domain\Anuncios\Domain\AnuncioDomain;


class User
{

    private $id;
    private $name;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

}