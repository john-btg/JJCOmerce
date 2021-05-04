<?php

namespace App\Entity;

use App\Repository\CatalogRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * @ORM\Entity(repositoryClass=CatalogRepository::class)
 * @Serializer\ExclusionPolicy("ALL")
 */
class Catalog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @Serializer\Expose
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Serializer\Expose
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Serializer\Expose
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Serializer\Expose
     */
    private $photo;

    /**
     * @ORM\Column(type="float")
     * @Serializer\Expose
     */
    private $price;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="ShoppingCart")
     */
    private $shoppingCart;

    /**
     * @ORM\ManyToMany(targetEntity=Order::class, mappedBy="products")
     */
    private $orders;

    public function __construct()
    {
        $this->shoppingCart = new ArrayCollection();
        $this->orders = new ArrayCollection();
    }



    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getShoppingCart(): Collection
    {
        return $this->shoppingCart;
    }

    public function addShoppingCart(User $shoppingCart): self
    {
        if (!$this->shoppingCart->contains($shoppingCart)) {
            $this->shoppingCart[] = $shoppingCart;
            $shoppingCart->addShoppingCart($this);
        }

        return $this;
    }

    public function removeShoppingCart(User $shoppingCart): self
    {
        if ($this->shoppingCart->removeElement($shoppingCart)) {
            $shoppingCart->removeShoppingCart($this);
        }

        return $this;
    }

    /**
     * @return Collection|Order[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->addProduct($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): self
    {
        if ($this->orders->removeElement($order)) {
            $order->removeProduct($this);
        }

        return $this;
    }

}
