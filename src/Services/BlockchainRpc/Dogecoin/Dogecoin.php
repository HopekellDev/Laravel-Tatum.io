<?php

/**
 * Laravel Tatum.io Dogecoin RPC Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainRpc\Dogecoin;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Dogecoin
{
    use HasHttpClient;

    /**
     * Generate Dogecoin wallet.
     *
     * @return array
     */
    public function generateWallet(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/dogecoin/wallet')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Generate Dogecoin address.
     *
     * @param  string  $xpub
     * @param  int  $index
     * @return array
     */
    public function generateAddress(string $xpub, int $index = 0): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/dogecoin/address/' . $xpub . '/' . $index)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Dogecoin transaction detail.
     *
     * @param  string  $txId
     * @return array
     */
    public function getTransaction(string $txId): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/dogecoin/transaction/' . $txId)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Dogecoin blockchain information.
     *
     * @return array
     */
    public function getInfo(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/dogecoin/info')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get Dogecoin block hash.
     *
     * @param  int  $height
     * @return array
     */
    public function getBlockHash(int $height): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/dogecoin/block/hash/' . $height)
        );

        $this->throwIfFailed($response);

        return $response;
    }
}