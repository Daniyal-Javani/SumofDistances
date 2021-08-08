<?php

namespace App\Distance;

use App\Distance\DistanceInterface;

class YardDistance implements DistanceInterface
{
    public function __construct(
        private float $value,
    ) {
    }

    public function getMeter(): float
    {
        return $this->value / 1.09361;
    }

    public function getYard(): float
    {
        return $this->value;
    }
}