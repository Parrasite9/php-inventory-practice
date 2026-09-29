<?php

namespace Isaiah\PhpInventoryPractice;

use RuntimeException;

class NamedItem
{
    public string $name = '';
    private int $quantity = 0;

    public function __construct(string $name, int $quantity)
    {
        if ($name == '') {
            throw new \RuntimeException('Name cannot be empty');
        } else {
            $this->name = $name;
        }


        if ($quantity < 0) {
            throw new \RuntimeException('Amount cannot be negative');
        } else {
            $this->quantity = $quantity;
        }
    }

    public function receive(int $amount)
    {
        if ($amount < 0) {
            throw new \RuntimeException('You cannot add a value less than 1');
        } else {
            $this->quantity += $amount;
        }

        return $this->quantity;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function isInStock(): bool
    {
        if ($this->getQuantity() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
