<?php

/**
 * Laravel Tatum.io XRP RPC Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainRpc\Xrp;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Xrp
{
    use HasHttpClient;

    /**
     * Generate XRP wallet.
     *
     * @return array
     */
    public function generateWallet(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/xrp/wallet')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Generate XRP address.
     *
     * @param  string  $xpub
     * @param  int  $index
     * @return array
     */
    public function generateAddress(string $xpub, int $index = 0): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/xrp/address/' . $xpub . '/' . $index)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get XRP account balance.
     *
     * @param  string  $address
     * @return array
     */
    public function getBalance(string $address): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/xrp/account/' . $address)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get XRP transaction detail.
     *
     * @param  string  $txId
     * @return array
     */
    public function getTransaction(string $txId): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/xrp/transaction/' . $txId)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get XRP blockchain information.
     *
     * @return array
     */
    public function getInfo(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/xrp/info')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}