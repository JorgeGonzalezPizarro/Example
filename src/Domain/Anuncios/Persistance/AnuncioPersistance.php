<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 07/09/2018
     * Time: 14:21
     */
    
    namespace App\Domain\Anuncios\Persistance;
    
    
    use App\Domain\Anuncios\Domain\AnuncioDomain\Anuncio;
    use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioRepository;
    use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
    use Doctrine\Common\Persistence\ManagerRegistry;
    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\EntityManagerInterface;
    use Doctrine\ORM\EntityRepository;
    use Doctrine\ORM\Mapping;
    
    

    class AnuncioPersistance extends ServiceEntityRepository implements AnuncioRepository
    {
    
        private $entityManager;
        private $repository;
        
    
        public function exists($id)
        {
            $this->find($id);
        }
        
        public function store($anuncio)
        {
            $this->getEntityManager()->persist($anuncio);
        }
        public function storeAnuncioWithComponents($anuncio,$components)
        {
            $this->getEntityManager()->persist($anuncio);
            $this->getEntityManager()->flush($anuncio);
        }
    
    
        public function __construct(ManagerRegistry $registry, string $entityClass , EntityManager $entityManager)
        {
            $this->entityManager = $entityManager;
            $this->repository = $this->entityManager->getRepository(Anuncio::class);
            parent::__construct($registry, $entityClass);
        }
    
    }