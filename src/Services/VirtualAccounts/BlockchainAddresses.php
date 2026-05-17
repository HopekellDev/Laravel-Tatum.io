<?php

/**
 * Laravel Tatum.io Blockchain Address Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\VirtualAccounts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class BlockchainAddresses
{
    use HasHttpClient;

    /**
     * Generate blockchain address.
     */
    public function generate(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/offchain/account/address', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Assign blockchain address to account.
     */
    public function assign(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/offchain/account/address/assign', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Remove blockchain address from account.
     */
    public function remove(string $address): array
    {
        $response = ApiResponse::format(
            $this->http()->delete(
                "/v3/offchain/account/address/{$address}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get blockchain addresses by account ID.
     */
    public function byAccount(string $accountId): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/offchain/account/{$accountId}/address"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get blockchain address detail.
     */
    public function find(string $address): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/offchain/account/address/{$address}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }
}