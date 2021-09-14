<?php

class Trajectory extends Gun
{
    public function trajectoryFormula(int $power, int $bulletSize): int
    {
        return ($power * $bulletSize) / 100;
    }
}