<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Emprunteur
 *
 * @ApiResource()
 * @ORM\Table(name="emprunteur", indexes={@ORM\Index(name="Utilisateur_ID", columns={"Utilisateur_ID"})})
 * @ORM\Entity(repositoryClass="App\Repository\Emprunteur")
 */
class Emprunteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Emprunteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmprunteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_emprunteur", type="string", length=50, nullable=false)
     */
    private $nomEmprunteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_emprunteur", type="string", length=50, nullable=false)
     */
    private $prenomEmprunteur;

    /**
     * @var int
     *
     * @ORM\Column(name="Numéro_téléphonne", type="integer", nullable=false)
     */
    private $numéroTéléphonne;

    /**
     * @var bool
     *
     * @ORM\Column(name="Emprunteur_actif", type="boolean", nullable=false)
     */
    private $emprunteurActif = '0';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Utilisateur_ID", referencedColumnName="ID_Utilisateur")
     * })
     */
    private $utilisateur;

    public function getIdEmprunteur(): ?int
    {
        return $this->idEmprunteur;
    }

    public function getNomEmprunteur(): ?string
    {
        return $this->nomEmprunteur;
    }

    public function setNomEmprunteur(string $nomEmprunteur): self
    {
        $this->nomEmprunteur = $nomEmprunteur;

        return $this;
    }

    public function getPrenomEmprunteur(): ?string
    {
        return $this->prenomEmprunteur;
    }

    public function setPrenomEmprunteur(string $prenomEmprunteur): self
    {
        $this->prenomEmprunteur = $prenomEmprunteur;

        return $this;
    }

    public function getNuméroTéléphonne(): ?int
    {
        return $this->numéroTéléphonne;
    }

    public function setNuméroTéléphonne(int $numéroTéléphonne): self
    {
        $this->numéroTéléphonne = $numéroTéléphonne;

        return $this;
    }

    public function getEmprunteurActif(): ?bool
    {
        return $this->emprunteurActif;
    }

    public function setEmprunteurActif(bool $emprunteurActif): self
    {
        $this->emprunteurActif = $emprunteurActif;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }


}
