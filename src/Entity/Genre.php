<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Genre
 *
 * @ApiResource()
 * @ORM\Table(name="genre")
 * @ORM\Entity(repositoryClass="App\Repository\Genre")
 */
class Genre
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Genre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="Genre_livre", type="string", length=50, nullable=false)
     */
    private $genreLivre;

    /**
     * @var string
     *
     * @ORM\Column(name="Description_genre", type="string", length=255, nullable=false)
     */
    private $descriptionGenre;

    public function getIdGenre(): ?int
    {
        return $this->idGenre;
    }

    public function getGenreLivre(): ?string
    {
        return $this->genreLivre;
    }

    public function setGenreLivre(string $genreLivre): self
    {
        $this->genreLivre = $genreLivre;

        return $this;
    }

    public function getDescriptionGenre(): ?string
    {
        return $this->descriptionGenre;
    }

    public function setDescriptionGenre(string $descriptionGenre): self
    {
        $this->descriptionGenre = $descriptionGenre;

        return $this;
    }


}
