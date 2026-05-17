<?php

/**
 * Laravel Tatum.io Blockchain Fee Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\VirtualAccounts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class BlockchainFees
{
    use HasHttpClient;

    /**
     * Get Bitcoin fee estimate.
     */
    public function bitcoin(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/blockchain/fee/BTC')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Ethereum fee estimate.
     */
    public function ethereum(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/blockchain/fee/ETH')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get BSC fee estimate.
     */
    public function bsc(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/blockchain/fee/BSC')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Polygon fee estimate.
     */
    public function polygon(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/blockchain/fee/MATIC')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Tron fee estimate.
     */
    public function tron(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/blockchain/fee/TRON')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get fee estimate by chain.
     */
    public function chain(string $chain): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/blockchain/fee/{$chain}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }
}