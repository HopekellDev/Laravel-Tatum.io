<?php

/**
 * Laravel Tatum.io Solana RPC Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainRpc\Solana;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Solana
{
    use HasHttpClient;

    /**
     * Generate Solana wallet.
     *
     * @return array
     */
    public function generateWallet(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/solana/wallet')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Solana account balance.
     *
     * @param  string  $address
     * @return array
     */
    public function getBalance(string $address): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/solana/account/' . $address)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Solana transaction detail.
     *
     * @param  string  $signature
     * @return array
     */
    public function getTransaction(string $signature): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/solana/transaction/' . $signature)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Solana blockchain information.
     *
     * @return array
     */
    public function getInfo(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/solana/info')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get latest Solana block.
     *
     * @return array
     */
    public function latestBlock(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/solana/block/latest')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}