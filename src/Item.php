<?php

namespace Isaiah\PhpInventoryPractice;

class Item
{
    public string $name = 'Bolts';
    public int $quantity = 10;

    public function addOne(): void
    {
        $this->quantity = $this->quantity + 1;
    }

    public function receive(int $amount): int
    {
        if ($amount < 1) {
            throw new \RuntimeException('You cannot add quantity less than 1');
        }

        $this->quantity = $this->quantity + $amount;

        return $this->quantity;
    }

    public function ship(int $amount): int
    {
        if ($this->quantity - $amount < 0 || $amount < 1) {
            throw new \RuntimeException('Quantity issues.');
        }

        $this->quantity = $this->quantity - $amount;

        return $this->quantity;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function isInStock(): bool
    {
        return $this->quantity > 0;
    }

    public function hasEnough(int $amount): bool
    {
        if ($this->quantity >= $amount) {
            return true;
        } else {
            return false;
        }
    }
}

?>