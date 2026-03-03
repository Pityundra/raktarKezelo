<?php

namespace RaktarKezelo;

class Brand
{
    private string $brandName;
    private int $quality;
    private string $origin;

    public function __construct(string $brandName, int $quality, string $origin)
    {
        $this->brandName = $brandName;
        $this->setQuality($quality);
        $this->origin = $origin;
    }

    public function getBrandName(): string
    {
        return $this->brandName;
    }

    public function getQuality(): int
    {
        return $this->quality;
    }

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function setQuality(int $quality): void
    {
        try {
            if ($quality < 1 || $quality > 5) {
                throw new \InvalidArgumentException(
                    "Hiba a " . $this->brandName . " termék felvétle közben. "
                    . "A minőségkategóriának 1 és 5 között kell lennie.<br>"
                );
            } else {
                $this->quality = $quality;
            }
        } catch (\Exception $e) {
            $this->quality = 1;
            echo $e->getMessage();
        }
    }

    public function message(): void
    {
        echo "Márkanév: " . $this->brandName
            . "; Minőségkategória: " . $this->quality
            . "; származás: " . $this->origin;
    }
}
