<?php

/**
 * Laravel Tatum.io Virtual Account Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\VirtualAccounts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Account
{
    use HasHttpClient;

    /**
     * Create virtual account.
     */
    public function create(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/ledger/account', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get virtual account by ID.
     */
    public function find(string $accountId): array
    {
        $response = ApiResponse::format(
            $this->http()->get("/v3/ledger/account/{$accountId}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get virtual accounts by customer ID.
     */
    public function byCustomer(string $customerId): array
    {
        $response = ApiResponse::format(
            $this->http()->get("/v3/ledger/account/customer/{$customerId}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Update virtual account.
     */
    public function update(string $accountId, array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->put("/v3/ledger/account/{$accountId}", $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Freeze virtual account.
     */
    public function freeze(string $accountId): array
    {
        $response = ApiResponse::format(
            $this->http()->put("/v3/ledger/account/{$accountId}/freeze")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Unfreeze virtual account.
     */
    public function unfreeze(string $accountId): array
    {
        $response = ApiResponse::format(
            $this->http()->put("/v3/ledger/account/{$accountId}/unfreeze")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Delete virtual account.
     */
    public function delete(string $accountId): array
    {
        $response = ApiResponse::format(
            $this->http()->delete("/v3/ledger/account/{$accountId}")
        );

        $this->throwIfFailed($response);

        return $response;
    }
}