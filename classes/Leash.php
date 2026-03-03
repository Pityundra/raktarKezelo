<?php

namespace RaktarKezelo;

class Leash extends Product
{
    private int $maxWeightKg;

    public function __construct(string $itemNumber, string $name, string $price, Brand $brand, string $weight, int $maxWeightKg)
    {
        parent::__construct($itemNumber, $name, $price, $brand, $weight);
        $this->maxWeightKg = $maxWeightKg;
    }

    public function getMaxWeightKg(): int
    {
        return $this->maxWeightKg;
    }
}
