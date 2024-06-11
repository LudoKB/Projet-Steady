<?php

namespace App\Entity;

use App\Repository\ShopRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShopRepository::class)]
class Shop
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Shop_describe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastUpdate = null;

    #[ORM\Column(length: 255)]
    private ?string $comment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getShopDescribe(): ?string
    {
        return $this->Shop_describe;
    }

    public function setShopDescribe(?string $Shop_describe): static
    {
        $this->Shop_describe = $Shop_describe;

        return $this;
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
        return $this->comment;
    }

    public function setComment(string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }
}
