<?php

namespace RaktarKezelo;

abstract class Product
{
    private string $itemNumber;
    private string $name;
    private string $price;
    private Brand $brand;
    private string $weight;

    public function __construct(string $itemNumber, string $name, string $price, Brand $brand, string $weight)
    {
        $this->itemNumber = $itemNumber;
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->weight = $weight;
    }

    public function getItemNumber(): string
    {
        return $this->itemNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getBrand(): Brand
    {
        return $this->brand;
    }

    public function getWeight(): string
    {
        return $this->weight;
    }

    public function message(): void
    {
        echo "Cikszám: " . $this->itemNumber
            . "; Mi vagyok: " . $this->name
            . "; Mennyi az annyi: " . $this->price
            . "; Márkám: " . $this->brand->getBrandName()
            . "; súly: " . $this->weight;
    }
}
