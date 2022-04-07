<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Utilisateur
 *
 * @ApiResource()
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="Email", columns={"Email"})})
 * @ORM\Entity(repositoryClass="App\Repository\Utilisateur")
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="Rôles", type="string", length=50, nullable=false)
     */
    private $rôles;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=70, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="MotDePasse", type="string", length=50, nullable=false)
     */
    private $motdepasse;

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function getRôles(): ?string
    {
        return $this->rôles;
    }

    public function setRôles(string $rôles): self
    {
        $this->rôles = $rôles;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }


}
