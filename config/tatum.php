<?php

/**
 * Laravel Tatum.io Package Configuration
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright (c) 2026 HopekellDev
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Tatum API Key
    |--------------------------------------------------------------------------
    |
    | Your Tatum.io API key.
    |
    */

    'api_key' => env('TATUM_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Base URL
    |--------------------------------------------------------------------------
    |
    | Tatum API base URL.
    |
    */

    'base_url' => env('TATUM_BASE_URL', 'https://api.tatum.io'),

    /*
    |--------------------------------------------------------------------------
    | Request Timeout
    |--------------------------------------------------------------------------
    |
    | Timeout in seconds for all API requests.
    |
    */

    'timeout' => env('TATUM_TIMEOUT', 30),

    /*
    |--------------------------------------------------------------------------
    | Throw Exceptions
    |--------------------------------------------------------------------------
    |
    | Automatically throw exceptions on failed API requests.
    |
    */

    'throw_exceptions' => env('TATUM_THROW_EXCEPTIONS', true),

];