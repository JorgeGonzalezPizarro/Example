<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:13
 */

namespace App\Domain\Anuncios\Domain\AnuncioDomain;


use App\Domain\Anuncios\Domain\Component\Component;
use App\Domain\Anuncios\Domain\States\IState;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Anuncio")
 */
class Anuncio
{
    /**
     * @return AnuncioId
     */
    public function getId(): AnuncioId
    {
        return $this->id;
    }

    /**
     * @param AnuncioId $id
     */
    public function setId(AnuncioId $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getAnuncioComponents(): string
    {
        return $this->anuncioComponents;
    }

    /**
     * @param string $anuncioComponents
     */
    public function setAnuncioComponents(string $anuncioComponents): void
    {
        $this->anuncioComponents = $anuncioComponents;
    }

    /**
     * @return string
     */
    public function getAnuncioState(): string
    {
        return $this->anuncioState;
    }

    /**
     * @param string $anuncioState
     */
    public function setAnuncioState(string $anuncioState): void
    {
        $this->anuncioState = $anuncioState;
    }


    
    /**
     * @var AnuncioId
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $anuncioComponents;
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $anuncioState;
    
    /**
     * Anuncio constructor.
     * @param AnuncioId $id
     * @param IState $anuncioState
     * @param ArrayCollection $anuncioComponents
     */
    public function __construct(AnuncioId $id,
                                IState $anuncioState,
                                ArrayCollection $anuncioComponents)
    {
        $this->id = $id;
        $this->anuncioComponents = $anuncioComponents;
        $this->anuncioState = $anuncioState;
    }
    
    /**
     * @param AnuncioId $id
     * @param IState $anuncioState
     * @param ArrayCollection $anuncioComponente
     * @return Anuncio
     */
    public static function createAnuncio(AnuncioId $id,
                                         IState $anuncioState,
                                         ArrayCollection $anuncioComponente)
    {
        return new self(
            $id,
            $anuncioState,
            $anuncioComponente);
    }


}