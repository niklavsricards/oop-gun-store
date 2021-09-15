<?php

class Gun
{
    protected string $name;
    protected string $licenseNumber;
    protected int $trajectory;

    public function __construct(string $name, string $licenseNumber)
    {
        $this->name = $name;
        $this->licenseNumber = $licenseNumber;
        $this->setTrajectory();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLicenseNumber(): string
    {
        return $this->licenseNumber;
    }

    public function getTrajectory(): int
    {
        return $this->trajectory;
    }

    protected function setTrajectory(): int
    {
        return $this->trajectory = (14 * 10) / 5;
    }
}