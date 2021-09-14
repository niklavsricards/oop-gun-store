<?php

class Gun
{
    private string $name;
    private string $licenseNumber;
    protected int $power;
    protected int $bulletSize;

    public function __construct(string $name, string $licenseNumber)
    {
        $this->name = $name;
        $this->licenseNumber = $licenseNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLicenseNumber(): string
    {
        return $this->licenseNumber;
    }

    public function setPower(int $power): void
    {
        $this->power = $power;
    }

    public function setBulletSize(int $bulletSize): void
    {
        $this->bulletSize = $bulletSize;
    }

    public function getTrajectory(): int
    {
        return $this->trajectoryFormula($this->power, $this->bulletSize);
    }
}