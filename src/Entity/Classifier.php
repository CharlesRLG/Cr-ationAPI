<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Classifier
 *
 * @ApiResource()
 * @ORM\Table(name="classifier", uniqueConstraints={@ORM\UniqueConstraint(name="ID_Genre", columns={"ID_Genre"}), @ORM\UniqueConstraint(name="Code_ISBN", columns={"Code_ISBN"})})
 * @ORM\Entity(repositoryClass="App\Repository\Classifier")
 */
class Classifier
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_classifier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClassifier;

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
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Genre", referencedColumnName="ID_Genre")
     * })
     */
    private $idGenre;

    public function getIdClassifier(): ?int
    {
        return $this->idClassifier;
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

    public function getIdGenre(): ?Genre
    {
        return $this->idGenre;
    }

    public function setIdGenre(?Genre $idGenre): self
    {
        $this->idGenre = $idGenre;

        return $this;
    }


}
