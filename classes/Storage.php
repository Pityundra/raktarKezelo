<?php

namespace RaktarKezelo;

class Storage
{
    private string $name;
    private string $address;
    private int $capacity;
    private array $stock = [];
    private string $distance;

    public function __construct(string $name, string $address, int $capacity, string $distance)
    {
        $this->name = $name;
        $this->address = $address;
        $this->capacity = $capacity;
        $this->distance = $distance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
    
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function getDistance(): string
    {
        return $this->distance;
    }

    public function getStock(): array
    {
        return $this->stock;
    }

    public function message(): void
    {
        echo "Megnevezés: " . $this->name
            . "; cím: " . $this->address
            . "; kapacitás: " . $this->capacity
            . "; távolság: " . $this->distance;
    }

    public function getProducts(): void
    {
        echo "<br>" . $this->name . "-ban tárolt termékek:<br>";
        foreach ($this->stock as $product) {
            echo $product->getName() . "<br>";
        }
    }

    public function freeCapacity(): int
    {
        return $this->capacity - count($this->stock);
    }

    public function addProduct(Product $product): void
    {
        if ($this->freeCapacity() !== 0) {
            $this->stock[] = $product;
        }
    }

    public function removeProduct(Product $product): bool
    {
        $key = array_search($product, $this->stock);

        if ($key !== false) {
            unset($this->stock[$key]);
            return true;
        }

        return false;
    }
}
