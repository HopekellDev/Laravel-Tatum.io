<?php

/**
 * Laravel Tatum.io Virtual Currency Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\VirtualAccounts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class VirtualCurrency
{
    use HasHttpClient;

    /**
     * Create virtual currency.
     */
    public function create(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/ledger/virtualCurrency', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get virtual currency by code.
     */
    public function find(string $code): array
    {
        $response = ApiResponse::format(
            $this->http()->get("/v3/ledger/virtualCurrency/{$code}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Update virtual currency.
     */
    public function update(string $code, array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->put("/v3/ledger/virtualCurrency/{$code}", $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Delete virtual currency.
     */
    public function delete(string $code): array
    {
        $response = ApiResponse::format(
            $this->http()->delete("/v3/ledger/virtualCurrency/{$code}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get all virtual currencies.
     */
    public function all(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/ledger/virtualCurrency')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}