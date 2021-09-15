<?php

class HeavyWeapon extends Gun
{
    public function __construct(string $name, string $licenseNumber)
    {
        parent::__construct($name, $licenseNumber);
        $this->setTrajectory();
    }

    protected function setTrajectory(): int
    {
        return $this->trajectory = (21 * 5) / 2;
    }
}