<?php

namespace Theposeidonas\LaravelKdvCalculator;

class KdvCalculator
{
    /**
     * @var float|mixed
     */
    private static mixed $percent;

    /**
     * @param $config
     */
    public function __construct($config)
    {
        self::$percent = $config['kdv'];
    }

    /**
     * @param float $value
     * @param null $percent
     * @return array
     */
    public static function calculate(float $value, $percent = null): array
    {
        if ($percent === null or $percent < 0 or $percent > 100) {
            $percent = self::$percent;
        }
        if ($value <= 0) {
            return array(
                'total' => $value,
                'kdv' => 0.0,
                'net' => 0.0
            );
        }
        else
        {
            $net = number_format($value/(1+$percent/100), 2);
            $kdv = $value - $net;
            return array(
                'total' => (float) $value,
                'kdv' => (float) $kdv,
                'net' => (float) $net
            );
        }
    }

    /**
     * @param float $value
     * @param $percent
     * @return array
     */
    public static function calculateNet(float $value, $percent = null): array
    {
        if ($percent === null or $percent < 0 or $percent > 100) {
            $percent = self::$percent;
        }
        if ($value <= 0) {
            return array(
                'total' => $value,
                'kdv' => 0.0,
                'net' => 0.0
            );
        }
        else
        {
            $total = number_format($value*(1+$percent/100), 2);
            $kdv = $total - $value;
            return array(
                'total' => (float) $total,
                'kdv' => (float) $kdv,
                'net' => (float) $value
            );
        }
    }
}