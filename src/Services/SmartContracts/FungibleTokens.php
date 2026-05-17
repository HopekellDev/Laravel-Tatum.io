<?php

/**
 * Laravel Tatum.io Fungible Token Smart Contract Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\SmartContracts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class FungibleTokens
{
    use HasHttpClient;

    /**
     * Deploy ERC-20 compatible token.
     *
     * @param  array  $data
     * @return array
     */
    public function deploy(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/fungible/deploy', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Mint fungible token.
     *
     * @param  array  $data
     * @return array
     */
    public function mint(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/fungible/mint', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Transfer fungible token.
     *
     * @param  array  $data
     * @return array
     */
    public function transfer(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/fungible/transaction', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Burn fungible token.
     *
     * @param  array  $data
     * @return array
     */
    public function burn(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/fungible/burn', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get token balance.
     *
     * @param  string  $chain
     * @param  string  $contractAddress
     * @param  string  $address
     * @return array
     */
    public function balance(
        string $chain,
        string $contractAddress,
        string $address
    ): array {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/fungible/balance/{$chain}/{$contractAddress}/{$address}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get token metadata.
     *
     * @param  string  $chain
     * @param  string  $contractAddress
     * @return array
     */
    public function metadata(
        string $chain,
        string $contractAddress
    ): array {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/fungible/metadata/{$chain}/{$contractAddress}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }
}