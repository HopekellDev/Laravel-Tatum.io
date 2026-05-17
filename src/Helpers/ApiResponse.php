<?php

/**
 * Laravel Tatum.io API Response Helper
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Helpers;

use Illuminate\Http\Client\Response;

class ApiResponse
{
    /**
     * Format API response.
     *
     * @param  \Illuminate\Http\Client\Response  $response
     * @return array
     */
    public static function format(Response $response): array
    {
        return [
            'success' => $response->successful(),
            'status'  => $response->status(),
            'message' => $response->json('message')
                ?? $response->json('error')
                ?? null,
            'data'    => $response->json(),
            'raw'     => $response,
        ];
    }
}