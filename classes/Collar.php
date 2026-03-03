<?php

namespace RaktarKezelo;

class Collar extends Product
{
    private string $size;

    public function __construct(string $itemNumber, string $name, string $price, Brand $brand, string $weight, string $size)
    {
        parent::__construct($itemNumber, $name, $price, $brand, $weight);
        $this->size = $size;
    }

    public function getSize(): string
    {
        return $this->size;
    }
}
