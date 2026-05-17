<?php

/**
 * Laravel Tatum.io Deposit Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\VirtualAccounts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Deposit
{
    use HasHttpClient;

    /**
     * Store blockchain deposit.
     */
    public function create(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/offchain/deposit', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get deposit by ID.
     */
    public function find(string $depositId): array
    {
        $response = ApiResponse::format(
            $this->http()->get("/v3/offchain/deposit/{$depositId}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get deposits by account ID.
     */
    public function byAccount(string $accountId): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/offchain/account/{$accountId}/deposit"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get all deposits.
     */
    public function all(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/offchain/deposit')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Delete deposit.
     */
    public function delete(string $depositId): array
    {
        $response = ApiResponse::format(
            $this->http()->delete(
                "/v3/offchain/deposit/{$depositId}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }
}