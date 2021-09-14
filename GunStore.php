<?php

class GunStore
{
    private array $weapons;

    public function __construct(array $weapons)
    {
        foreach ($weapons as $weapon)
        {
            $this->add($weapon);
        }
    }

    public function add(Gun $weapon)
    {
        $this->weapons[] = $weapon;
    }

    public function listAllGuns(): void
    {
        foreach ($this->weapons as $weapon)
        {
            echo "{$weapon->getName() } | {$weapon->getLicenseNumber()}" . PHP_EOL;
        }
    }
}