<?php

namespace theposeidonas\LaravelKdvCalculator\Tests\Feature;

use Orchestra\Testbench\TestCase;
use Theposeidonas\LaravelKdvCalculator\Facades\KDV;


class Test extends TestCase
{
    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
    }
    public function getName(bool $withDataSet = true): string
    {
        return 'test';
    }

    /**
     * @param $app
     * @return string[]
     */
    protected function getPackageProviders($app)
    {
        return ['Theposeidonas\LaravelKdvCalculator\KdvCalculatorServiceProvider'];
    }


    public function test()
    {
        $result = KDV::calculate(100);
        $this->assertEquals(100, $result['total']);
        $this->assertEquals(83.33, $result['net']);
        $this->assertEquals(16.67, $result['kdv']);
        $result = KDV::calculateNet(83.33);
        $this->assertEquals(100, $result['total']);
        $this->assertEquals(83.33, $result['net']);
        $this->assertEquals(16.67, $result['kdv']);
    }

}
