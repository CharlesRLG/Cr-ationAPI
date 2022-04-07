<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Emprunter
 *
 * @ApiResource()
 * @ORM\Table(name="emprunter", uniqueConstraints={@ORM\UniqueConstraint(name="Code_ISBN", columns={"Code_ISBN"})}, indexes={@ORM\Index(name="ID_Emprunteur", columns={"ID_Emprunteur"})})
 * @ORM\Entity(repositoryClass="App\Repository\Emprunter")
 */
class Emprunter
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_emprunt", type="date", nullable=false)
     */
    private $dateEmprunt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_retour", type="date", nullable=false)
     */
    private $dateRetour;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_emprunter", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmprunter;

    /**
     * @var \Livre
     *
     * @ORM\ManyToOne(targetEntity="Livre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_ISBN", referencedColumnName="Code_ISBN")
     * })
     */
    private $codeIsbn;

    /**
     * @var \Emprunteur
     *
     * @ORM\ManyToOne(targetEntity="Emprunteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Emprunteur", referencedColumnName="ID_Emprunteur")
     * })
     */
    private $idEmprunteur;

    public function getDateEmprunt(): ?\DateTimeInterface
    {
        return $this->dateEmprunt;
    }

    public function setDateEmprunt(\DateTimeInterface $dateEmprunt): self
    {
        $this->dateEmprunt = $dateEmprunt;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->dateRetour;
    }

    public function setDateRetour(\DateTimeInterface $dateRetour): self
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    public function getIdEmprunter(): ?int
    {
        return $this->idEmprunter;
    }

    public function getCodeIsbn(): ?Livre
    {
        return $this->codeIsbn;
    }

    public function setCodeIsbn(?Livre $codeIsbn): self
    {
        $this->codeIsbn = $codeIsbn;

        return $this;
    }

    public function getIdEmprunteur(): ?Emprunteur
    {
        return $this->idEmprunteur;
    }

    public function setIdEmprunteur(?Emprunteur $idEmprunteur): self
    {
        $this->idEmprunteur = $idEmprunteur;

        return $this;
    }


}
