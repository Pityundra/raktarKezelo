<?php

namespace RaktarKezelo;

class Treat extends Product
{
    private string $flavorType;

    public function __construct(string $itemNumber, string $name, string $price, Brand $brand, string $weight, string $flavorType)
    {
        parent::__construct($itemNumber, $name, $price, $brand, $weight);
        $this->flavorType = $flavorType;
    }

    public function getFlavorType(): string
    {
        return $this->flavorType;
    }
}
