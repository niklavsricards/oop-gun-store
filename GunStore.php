<?php

class GunStore
{
    private array $guns;

    public function __construct(array $guns)
    {
        foreach ($guns as $gun)
        {
            $this->add($gun);
        }
    }

    public function add(ListedItem $listedItem): void
    {
        $this->guns[] = $listedItem;
    }

    public function getGuns(): array
    {
        return $this->guns;
    }
}