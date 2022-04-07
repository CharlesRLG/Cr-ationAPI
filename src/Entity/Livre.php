<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Livre
 *
 * @ApiResource()
 * @ORM\Table(name="livre", indexes={@ORM\Index(name="ID_Auteur", columns={"ID_Auteur"})})
 * @ORM\Entity(repositoryClass="App\Repository\Livre")
 */
class Livre
{
    /**
     * @var string
     *
     * @ORM\Column(name="Code_ISBN", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeIsbn;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_livre", type="string", length=50, nullable=false)
     */
    private $titreLivre;

    /**
     * @var \Auteur
     *
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Auteur", referencedColumnName="ID_Auteur")
     * })
     */
    private $idAuteur;

    public function getCodeIsbn(): ?string
    {
        return $this->codeIsbn;
    }

    public function getTitreLivre(): ?string
    {
        return $this->titreLivre;
    }

    public function setTitreLivre(string $titreLivre): self
    {
        $this->titreLivre = $titreLivre;

        return $this;
    }

    public function getIdAuteur(): ?Auteur
    {
        return $this->idAuteur;
    }

    public function setIdAuteur(?Auteur $idAuteur): self
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }


}
