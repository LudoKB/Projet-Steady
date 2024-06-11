<?php

namespace App\Entity;

use App\Repository\PicturesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PicturesRepository::class)]
class Pictures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastUpdate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Comment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastUpdate(): ?string
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate(?string $lastUpdate): static
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->Comment;
    }

    public function setComment(?string $Comment): static
    {
        $this->Comment = $Comment;

        return $this;
    }
}
