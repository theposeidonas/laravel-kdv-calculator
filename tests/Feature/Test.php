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
        $bool = KDV::test();
        $this->assertTrue($bool);
    }
}
