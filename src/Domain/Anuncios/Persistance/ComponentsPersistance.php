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
    use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentRepository;
    use App\Domain\Anuncios\Domain\Component\Component;
    use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
    use Doctrine\Common\Persistence\ManagerRegistry;
    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\EntityManagerInterface;
    use Doctrine\ORM\EntityRepository;
    use Doctrine\ORM\Mapping;
    
    

    class ComponentsPersistance extends ServiceEntityRepository implements \App\Domain\Anuncios\Domain\Component\ComponentRepository
    {
    
        private $entityManager;
        private $repository;
        
    
        public function exists($id)
        {
            $this->find($id);
        }
        
        public function store($component)
        {
            $this->getEntityManager()->persist($component);
        }
    
        public function finishStoreAnuncio()
        {
            $this->getEntityManager()->flush();
        }
        public function __construct(ManagerRegistry $registry, string $entityClass , EntityManager $entityManager)
        {
            $this->entityManager = $entityManager;
            $this->repository = $this->entityManager->getRepository(Component::class);
            parent::__construct($registry, $entityClass);
        }
    
    }