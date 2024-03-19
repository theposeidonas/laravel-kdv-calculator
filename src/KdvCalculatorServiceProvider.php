<?php

namespace Theposeidonas\LaravelKdvCalculator;
use Illuminate\Support\ServiceProvider;

class KdvCalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/kdv.php' => config_path('kdv.php'),
        ], 'kdv-calculator-config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/kdv.php', 'kdv');
        $this->app->singleton(KdvCalculator::class, function ($app) {
            return new KdvCalculator($app['config']['kdv']);
        });
    }
}