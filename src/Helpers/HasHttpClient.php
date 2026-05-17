<?php

/**
 * Laravel Tatum.io HTTP Client Helper
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\PendingRequest;
use HopekellDev\Tatum\Exceptions\TatumException;

trait HasHttpClient
{
    /**
     * Create configured HTTP client.
     *
     * @return \Illuminate\Http\Client\PendingRequest
     */
    protected function http(): PendingRequest
    {
        return Http::baseUrl(config('tatum.base_url'))
            ->timeout(config('tatum.timeout'))
            ->acceptJson()
            ->withHeaders([
                'x-api-key'   => config('tatum.api_key'),
                'Content-Type' => 'application/json',
            ]);
    }

    /**
     * Handle failed response.
     *
     * @param  array  $response
     * @return void
     *
     * @throws \HopekellDev\Tatum\Exceptions\TatumException
     */
    protected function throwIfFailed(array $response): void
    {
        if (
            config('tatum.throw_exceptions') &&
            ! $response['success']
        ) {
            throw new TatumException(
                $response['message']
                    ?? 'Tatum API request failed.'
            );
        }
    }
}