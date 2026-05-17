<?php

/**
 * Laravel Tatum.io Bitcoin RPC Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainRpc\Bitcoin;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Bitcoin
{
    use HasHttpClient;

    /**
     * Generate Bitcoin wallet.
     *
     * @return array
     */
    public function generateWallet(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/bitcoin/wallet')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Generate Bitcoin address.
     *
     * @param  string  $xpub
     * @param  int  $index
     * @return array
     */
    public function generateAddress(string $xpub, int $index = 0): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/bitcoin/address/' . $xpub . '/' . $index)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Bitcoin block hash.
     *
     * @param  int  $height
     * @return array
     */
    public function getBlockHash(int $height): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/bitcoin/block/hash/' . $height)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Bitcoin transaction.
     *
     * @param  string  $txId
     * @return array
     */
    public function getTransaction(string $txId): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/bitcoin/transaction/' . $txId)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Bitcoin blockchain information.
     *
     * @return array
     */
    public function getInfo(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/bitcoin/info')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}