<?php

/**
 * Laravel Tatum.io Blockchain Operation Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\VirtualAccounts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class BlockchainOperations
{
    use HasHttpClient;

    /**
     * Create blockchain transaction.
     */
    public function transfer(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/offchain/withdrawal', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Broadcast signed transaction.
     */
    public function broadcast(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/blockchain/broadcast', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Estimate blockchain transaction fee.
     */
    public function estimateFee(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/blockchain/estimate', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get blockchain transaction detail.
     */
    public function transaction(
        string $chain,
        string $txId
    ): array {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/blockchain/transaction/{$chain}/{$txId}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get blockchain transaction status.
     */
    public function status(
        string $chain,
        string $txId
    ): array {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/blockchain/status/{$chain}/{$txId}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }
}