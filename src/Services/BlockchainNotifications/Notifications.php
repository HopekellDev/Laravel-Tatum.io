<?php

/**
 * Laravel Tatum.io Blockchain Notification Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainNotifications;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Notifications
{
    use HasHttpClient;

    /**
     * Get all notifications.
     *
     * @return array
     */
    public function all(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v4/notification')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get notification detail.
     *
     * @param  string  $id
     * @return array
     */
    public function find(string $id): array
    {
        $response = ApiResponse::format(
            $this->http()->get("/v4/notification/{$id}")
        );

        $this->throwIfFailed($response);

        return $response;
    }
}