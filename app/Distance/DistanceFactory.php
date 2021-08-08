<?php

namespace App\Distance;

use Exception;

class DistanceFactory
{
    public static function make(string $unit, float $value): DistanceInterface
    {
        switch ($unit) {
            case 'meter':
                return new MeterDistance($value);
                break;
            case 'yard':
                return new YardDistance($value);
                break;
            default:
                throw new Exception('Unit is not defined');
                break;
        }
    }
}
