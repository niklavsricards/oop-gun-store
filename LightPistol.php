<?php

class LightPistol extends Gun
{
    public function __construct(string $name, string $licenseNumber)
    {
        parent::__construct($name, $licenseNumber);
        $this->setTrajectory();
    }

    protected function setTrajectory(): int
    {
        return $this->trajectory = (20 * 10) / 6;
    }
}