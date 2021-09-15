<?php

class ListedItem
{
    private Gun $gun;
    private int $price;
    private int $quantity;

    public function __construct(Gun $gun, int $price, int $quantity)
    {
        $this->gun = $gun;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getGun(): Gun
    {
        return $this->gun;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}