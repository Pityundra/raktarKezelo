<?php

namespace RaktarKezelo;

class StorageController
{
    private array $allStorages = [];

    public function __construct(array $allStorages)
    {
        $this->allStorages = $allStorages;
    }

    public function productStorageLoad(Storage $storage, Product $product): void
    {
        try {
            if ($storage->freeCapacity() != 0) {
                $storage->addProduct($product);
                echo "A " . $product->getName() . " el lett helyezve a " . $storage->getName() . "-ba.<br>";
                return;
            } else {
                foreach ($this->allStorages as $cStorage) {
                    if ($cStorage != $storage && $cStorage->freeCapacity() != 0) {
                        $cStorage->addProduct($product);
                        echo "A " . $product->getName() . " el lett helyezve a " . $cStorage->getName() . "-ba.<br>";
                        return;
                    }
                }
            }
            throw new \Exception("A " . $product->getName() . " nem fér el egyik raktárunkba sem.<br>");
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function productDelivery(Product $product, int $number): void
    {
        $productInStorage = 0;
        $numberCounter = $number;

        foreach ($this->allStorages as $cStorage) {
            foreach ($cStorage->getStock() as $item) {
                if ($item == $product) {
                    $productInStorage++;
                }
            }
        }

        try {
            if ($number <= $productInStorage) {
                foreach ($this->allStorages as $cStorage) {
                    if ($numberCounter == 0) {
                        break;
                    }
                    while ($numberCounter > 0 && $cStorage->removeProduct($product)) {
                        $numberCounter--;
                    }
                }
                echo "A kiválaszott " . $product->getName() . " termékből " . $number . " db kiszálításra került.<br>";
            } else {
                throw new \Exception(
                    $product->getName() . " termékből kevesebb mint " . $number . " van a raktárjainkban.<br>"
                );
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
