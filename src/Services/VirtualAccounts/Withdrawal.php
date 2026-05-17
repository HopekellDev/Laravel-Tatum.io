<?php

/**
 * Laravel Tatum.io Withdrawal Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\VirtualAccounts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Withdrawal
{
    use HasHttpClient;

    /**
     * Create withdrawal.
     */
    public function create(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/offchain/withdrawal', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Broadcast withdrawal transaction.
     */
    public function broadcast(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/offchain/withdrawal/broadcast', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get withdrawal by ID.
     */
    public function find(string $withdrawalId): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/offchain/withdrawal/{$withdrawalId}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Cancel withdrawal.
     */
    public function cancel(string $withdrawalId): array
    {
        $response = ApiResponse::format(
            $this->http()->delete(
                "/v3/offchain/withdrawal/{$withdrawalId}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get withdrawals by account ID.
     */
    public function byAccount(string $accountId): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/offchain/account/{$accountId}/withdrawal"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get all withdrawals.
     */
    public function all(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/offchain/withdrawal')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}