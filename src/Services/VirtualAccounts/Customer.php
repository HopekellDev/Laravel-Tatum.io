<?php

/**
 * Laravel Tatum.io Virtual Account Customer Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\VirtualAccounts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Customer
{
    use HasHttpClient;

    /**
     * Create customer.
     */
    public function create(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/ledger/customer', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get customer by ID.
     */
    public function find(string $customerId): array
    {
        $response = ApiResponse::format(
            $this->http()->get("/v3/ledger/customer/{$customerId}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Update customer.
     */
    public function update(string $customerId, array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->put("/v3/ledger/customer/{$customerId}", $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Delete customer.
     */
    public function delete(string $customerId): array
    {
        $response = ApiResponse::format(
            $this->http()->delete("/v3/ledger/customer/{$customerId}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get all customers.
     */
    public function all(
        ?int $pageSize = null,
        ?int $offset = null
    ): array {
        $query = array_filter([
            'pageSize' => $pageSize,
            'offset'   => $offset,
        ]);

        $response = ApiResponse::format(
            $this->http()->get('/v3/ledger/customer', $query)
        );

        $this->throwIfFailed($response);

        return $response;
    }
}