<?php

namespace App\Distance;

interface DistanceInterface
{
    public function getMeter(): float;
    public function getYard(): float;
}
