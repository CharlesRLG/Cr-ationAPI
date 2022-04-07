<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Auteur
 * 
 * @ApiResource()
 * @ORM\Table(name="auteur")
 * @ORM\Entity(repositoryClass="App\Repository\Auteur")
 */
class Auteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Auteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_auteur", type="string", length=50, nullable=false)
     */
    private $nomAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Auteur", type="string", length=50, nullable=false)
     */
    private $prenomAuteur;

    public function getIdAuteur(): ?int
    {
        return $this->idAuteur;
    }

    public function getNomAuteur(): ?string
    {
        return $this->nomAuteur;
    }

    public function setNomAuteur(string $nomAuteur): self
    {
        $this->nomAuteur = $nomAuteur;

        return $this;
    }

    public function getPrenomAuteur(): ?string
    {
        return $this->prenomAuteur;
    }

    public function setPrenomAuteur(string $prenomAuteur): self
    {
        $this->prenomAuteur = $prenomAuteur;

        return $this;
    }


}
