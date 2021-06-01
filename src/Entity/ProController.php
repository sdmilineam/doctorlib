<?php

namespace App\Entity;

use App\Repository\ProControllerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProControllerRepository::class)
 */
class ProController
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $UserPro_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Professonnel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_pro;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_pro;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdat;

    /**
     * @ORM\Column(type="text")
     */
    private $location;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserProId(): ?int
    {
        return $this->UserPro_id;
    }

    public function setUserProId(int $UserPro_id): self
    {
        $this->UserPro_id = $UserPro_id;

        return $this;
    }

    public function getProfessonnel(): ?string
    {
        return $this->Professonnel;
    }

    public function setProfessonnel(string $Professonnel): self
    {
        $this->Professonnel = $Professonnel;

        return $this;
    }

    public function getNomPro(): ?string
    {
        return $this->nom_pro;
    }

    public function setNomPro(string $nom_pro): self
    {
        $this->nom_pro = $nom_pro;

        return $this;
    }

    public function getPrenomPro(): ?string
    {
        return $this->prenom_pro;
    }

    public function setPrenomPro(string $prenom_pro): self
    {
        $this->prenom_pro = $prenom_pro;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedat(): ?\DateTimeInterface
    {
        return $this->createdat;
    }

    public function setCreatedat(\DateTimeInterface $createdat): self
    {
        $this->createdat = $createdat;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }
}
