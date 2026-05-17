<?php

/**
 * Laravel Tatum.io BNB Smart Chain RPC Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainRpc\BnbSmartChain;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class BnbSmartChain
{
    use HasHttpClient;

    /**
     * Generate BSC wallet.
     *
     * @return array
     */
    public function generateWallet(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/bsc/wallet')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Generate BSC address.
     *
     * @param  string  $xpub
     * @param  int  $index
     * @return array
     */
    public function generateAddress(string $xpub, int $index = 0): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/bsc/address/' . $xpub . '/' . $index)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get BSC account balance.
     *
     * @param  string  $address
     * @return array
     */
    public function getBalance(string $address): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/bsc/account/balance/' . $address)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get BSC transaction detail.
     *
     * @param  string  $txId
     * @return array
     */
    public function getTransaction(string $txId): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/bsc/transaction/' . $txId)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Estimate BSC gas fee.
     *
     * @return array
     */
    public function estimateGas(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/bsc/gas')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get BSC blockchain information.
     *
     * @return array
     */
    public function getInfo(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/bsc/info')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}