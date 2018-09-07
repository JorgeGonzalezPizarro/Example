<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 07/09/2018
     * Time: 14:21
     */
    
    namespace App\Domain\Anuncios\Persistance;
    
    
    use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioRepository;
    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\EntityRepository;

    class AnuncioPersistance extends EntityRepository  implements AnuncioRepository
    {
    

        public function exists($id)
        {
        $this->find($id);
        }
    
        public function store($video)
        {
            $this->getEntityManager()->persist($video);
        }
    }