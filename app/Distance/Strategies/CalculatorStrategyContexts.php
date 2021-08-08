<?php

namespace App\Distance\Strategies;

use Exception;

class CalculatorStrategyContexts
{
    private $strategy;

    public function __construct(string $unit)
    {
        switch ($unit) {
            case 'meter':
                $this->strategy = new MeterCalculatorStrategy();
                break;
            case 'yard':
                $this->strategy = new YardCalculatorStrategy();
                break;
            default:
                throw new Exception('not defined unit');
                break;
        }
    }

    public function calculate(array $distances): float
    {
        return round($this->strategy->calculate($distances), 4);
    }
}
