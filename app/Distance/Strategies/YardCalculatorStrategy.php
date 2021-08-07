<?php

namespace App\Distance\Strategies;

use App\Distance\DistanceInterface;
use App\Distance\Strategies\CalculatorStrategyInterface;
use Exception;

class YardCalculatorStrategy implements CalculatorStrategyInterface
{
    public function calculate(array $distances)
    {
        $sum = 0;
        foreach ($distances as $distance) {
            if (! $distance instanceof DistanceInterface) {
                throw new Exception('Distance variable is not an instance of Distance');
            }
            $sum += $distance->getYard();
        }

        return $sum;
    }
}