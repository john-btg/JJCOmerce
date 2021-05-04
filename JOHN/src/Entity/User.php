<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Catalog::class, inversedBy="shoppingCart")
     */
    private $ShoppingCart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $orders_id = [];

    public function __construct()
    {
        $this->ShoppingCart = new ArrayCollection();

    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Collection|catalog[]
     */
    public function getShoppingCart(): Collection
    {
        return $this->ShoppingCart;
    }

    public function addShoppingCart(catalog $shoppingCart): self
    {
        if (!$this->ShoppingCart->contains($shoppingCart)) {
            $this->ShoppingCart[] = $shoppingCart;
        }

        return $this;
    }

    public function removeShoppingCart(catalog $shoppingCart): self
    {
        $this->ShoppingCart->removeElement($shoppingCart);

        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getOrdersId()
    {
        return $this->orders_id;
    }

    public function setOrdersId(?array $orders_id): self
    {
        $this->orders_id = $orders_id;

        return $this;
    }







}
