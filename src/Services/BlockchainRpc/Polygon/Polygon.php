<?php

/**
 * Laravel Tatum.io Polygon RPC Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainRpc\Polygon;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Polygon
{
    use HasHttpClient;

    /**
     * Generate Polygon wallet.
     *
     * @return array
     */
    public function generateWallet(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/polygon/wallet')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Generate Polygon address.
     *
     * @param  string  $xpub
     * @param  int  $index
     * @return array
     */
    public function generateAddress(string $xpub, int $index = 0): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/polygon/address/' . $xpub . '/' . $index)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Polygon account balance.
     *
     * @param  string  $address
     * @return array
     */
    public function getBalance(string $address): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/polygon/account/balance/' . $address)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Polygon transaction detail.
     *
     * @param  string  $txId
     * @return array
     */
    public function getTransaction(string $txId): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/polygon/transaction/' . $txId)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Estimate Polygon gas fee.
     *
     * @return array
     */
    public function estimateGas(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/polygon/gas')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Polygon blockchain information.
     *
     * @return array
     */
    public function getInfo(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/polygon/info')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}