<?php

/**
 * Laravel Tatum.io Litecoin RPC Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainRpc\Litecoin;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Litecoin
{
    use HasHttpClient;

    /**
     * Generate Litecoin wallet.
     *
     * @return array
     */
    public function generateWallet(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/litecoin/wallet')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Generate Litecoin address.
     *
     * @param  string  $xpub
     * @param  int  $index
     * @return array
     */
    public function generateAddress(string $xpub, int $index = 0): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/litecoin/address/' . $xpub . '/' . $index)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Litecoin transaction detail.
     *
     * @param  string  $txId
     * @return array
     */
    public function getTransaction(string $txId): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/litecoin/transaction/' . $txId)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Litecoin blockchain information.
     *
     * @return array
     */
    public function getInfo(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/litecoin/info')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Litecoin block hash.
     *
     * @param  int  $height
     * @return array
     */
    public function getBlockHash(int $height): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/litecoin/block/hash/' . $height)
        );

        $this->throwIfFailed($response);

        return $response;
    }
}