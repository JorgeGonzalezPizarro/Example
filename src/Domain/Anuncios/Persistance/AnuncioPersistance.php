<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 14:21
 */

namespace App\Domain\Anuncios\Persistance;


use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping;

class AnuncioPersistance extends EntityManager implements AnuncioRepository
{
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }


    public function exists($id)
    {
        $this->find($id);
    }

    public function store($video)
    {
        $this->getEntityManager()->persist($video);
    }
}