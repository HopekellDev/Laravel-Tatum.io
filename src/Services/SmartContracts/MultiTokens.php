<?php

/**
 * Laravel Tatum.io Multi Token Smart Contract Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\SmartContracts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class MultiTokens
{
    use HasHttpClient;

    /**
     * Deploy ERC-1155 compatible multi token contract.
     */
    public function deploy(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/multitoken/deploy', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Mint multi token.
     */
    public function mint(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/multitoken/mint', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Transfer multi token.
     */
    public function transfer(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/multitoken/transaction', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Burn multi token.
     */
    public function burn(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/multitoken/burn', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get multi token balance.
     */
    public function balance(
        string $chain,
        string $contractAddress,
        string $address,
        string|int $tokenId
    ): array {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/multitoken/balance/{$chain}/{$contractAddress}/{$address}/{$tokenId}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get multi token metadata.
     */
    public function metadata(
        string $chain,
        string $contractAddress,
        string|int $tokenId
    ): array {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/multitoken/metadata/{$chain}/{$contractAddress}/{$tokenId}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }
}