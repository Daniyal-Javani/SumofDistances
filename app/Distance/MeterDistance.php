<?php

namespace App\Distance;

use App\Distance\DistanceInterface;

class MeterDistance implements DistanceInterface
{
    public function __construct(
        private float $value,
    ) {
    }

    public function getMeter(): float
    {
        return $this->value;
    }

    public function getYard(): float
    {
        return $this->value * 1.09361;
    }
}
