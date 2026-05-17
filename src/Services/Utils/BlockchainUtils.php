<?php

/**
 * Laravel Tatum.io Blockchain Utility Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\Utils;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class BlockchainUtils
{
    use HasHttpClient;

    /**
     * Estimate blockchain fee.
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
     * Get blockchain transaction.
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
    public function transactionStatus(
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
     * Get blockchain fee.
     */
    public function fee(string $chain): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/blockchain/fee/{$chain}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Validate blockchain address.
     */
    public function validateAddress(
        string $chain,
        string $address
    ): array {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/blockchain/address/{$chain}/{$address}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }
}