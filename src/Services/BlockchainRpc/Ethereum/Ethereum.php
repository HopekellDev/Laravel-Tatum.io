<?php

/**
 * Laravel Tatum.io Ethereum RPC Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainRpc\Ethereum;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Ethereum
{
    use HasHttpClient;

    /**
     * Generate Ethereum wallet.
     *
     * @return array
     */
    public function generateWallet(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/ethereum/wallet')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Generate Ethereum address.
     *
     * @param  string  $xpub
     * @param  int  $index
     * @return array
     */
    public function generateAddress(string $xpub, int $index = 0): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/ethereum/address/' . $xpub . '/' . $index)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Ethereum account balance.
     *
     * @param  string  $address
     * @return array
     */
    public function getBalance(string $address): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/ethereum/account/balance/' . $address)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Ethereum transaction detail.
     *
     * @param  string  $txId
     * @return array
     */
    public function getTransaction(string $txId): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/ethereum/transaction/' . $txId)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Estimate Ethereum gas fee.
     *
     * @return array
     */
    public function estimateGas(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/ethereum/gas')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Ethereum blockchain information.
     *
     * @return array
     */
    public function getInfo(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/ethereum/info')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}