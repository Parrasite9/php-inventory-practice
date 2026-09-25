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

    public function receive(int $amount): void
    {
        $this->quantity = $this->quantity + $amount;
    }

    public function ship(int $amount): void
    {
        $this->quantity = $this->quantity - $amount;
    }

}

?>