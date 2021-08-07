<?php

namespace App\Http\Controllers;

use App\Distance\DistanceFactory;
use App\Distance\Strategies\CalculatorStrategyContexts;
use App\Http\Requests\CalculateDistancesRequest;
use Illuminate\Http\Request;

class DistanceCalculatorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \App\Http\Requests\CalculateDistancesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CalculateDistancesRequest $request)
    {
        $distances = $request->distances;
        $responseUnit = $request->response_unit;

        foreach ($distances as $distance) {
            $distanceObjects[] = DistanceFactory::make(
                $distance['unit'],
                $distance['value']
            );
        }

        $strategy = new CalculatorStrategyContexts($responseUnit);
        return response()->json([
            'data' => [
                'value' => $strategy->calculate($distanceObjects),
                'unit' => $responseUnit
            ]
        ]);
    }
}
