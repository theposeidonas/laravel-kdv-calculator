<?php
namespace Theposeidonas\LaravelKdvCalculator\Facades;

use Illuminate\Support\Facades\Facade;
use Theposeidonas\LaravelKdvCalculator\KdvCalculator;

class KDV extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor(): string
    {
        return KdvCalculator::class;
    }
}