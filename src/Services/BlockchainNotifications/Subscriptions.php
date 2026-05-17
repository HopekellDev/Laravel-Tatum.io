<?php

/**
 * Laravel Tatum.io Blockchain Subscription Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainNotifications;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Subscriptions
{
    use HasHttpClient;

    /**
     * Get all subscriptions.
     *
     * @return array
     */
    public function all(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v4/subscription')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get subscription detail.
     *
     * @param  string  $id
     * @return array
     */
    public function find(string $id): array
    {
        $response = ApiResponse::format(
            $this->http()->get("/v4/subscription/{$id}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Delete subscription.
     *
     * @param  string  $id
     * @return array
     */
    public function delete(string $id): array
    {
        $response = ApiResponse::format(
            $this->http()->delete("/v4/subscription/{$id}")
        );

        $this->throwIfFailed($response);

        return $response;
    }
}