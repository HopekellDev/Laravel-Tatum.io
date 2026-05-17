<?php

/**
 * Laravel Tatum.io Tron RPC Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainRpc\Tron;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Tron
{
    use HasHttpClient;

    /**
     * Generate Tron wallet.
     *
     * @return array
     */
    public function generateWallet(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/tron/wallet')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Generate Tron address.
     *
     * @param  string  $xpub
     * @param  int  $index
     * @return array
     */
    public function generateAddress(string $xpub, int $index = 0): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/tron/address/' . $xpub . '/' . $index)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Tron account balance.
     *
     * @param  string  $address
     * @return array
     */
    public function getBalance(string $address): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/tron/account/' . $address)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Tron transaction detail.
     *
     * @param  string  $txId
     * @return array
     */
    public function getTransaction(string $txId): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/tron/transaction/' . $txId)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Estimate Tron fee.
     *
     * @return array
     */
    public function estimateFee(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/tron/fees')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Tron blockchain information.
     *
     * @return array
     */
    public function getInfo(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/tron/info')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}