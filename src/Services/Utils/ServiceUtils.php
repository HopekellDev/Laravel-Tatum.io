<?php

/**
 * Laravel Tatum.io Service Utility Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\Utils;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class ServiceUtils
{
    use HasHttpClient;

    /**
     * Get service health status.
     */
    public function health(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/tatum/health')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get API version information.
     */
    public function version(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/tatum/version')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get supported blockchains.
     */
    public function blockchains(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/tatum/blockchains')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get supported virtual currencies.
     */
    public function currencies(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/tatum/currencies')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Ping Tatum API.
     */
    public function ping(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/tatum/ping')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}