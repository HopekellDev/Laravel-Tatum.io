<?php

/**
 * Laravel Tatum.io Service Provider
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum;

use Illuminate\Support\ServiceProvider;

class TatumServiceProvider extends ServiceProvider
{
    /**
     * Register package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/tatum.php',
            'tatum'
        );

        $this->app->singleton('tatum', function () {
            return new Tatum();
        });
    }

    /**
     * Bootstrap package services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/tatum.php' => config_path('tatum.php'),
        ], 'tatum-config');
    }
}