<?php

/**
 * Laravel Tatum.io NFT Smart Contract Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\SmartContracts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Nft
{
    use HasHttpClient;

    /**
     * Deploy NFT smart contract.
     *
     * @param  array  $data
     * @return array
     */
    public function deploy(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/nft/deploy', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Mint NFT token.
     *
     * @param  array  $data
     * @return array
     */
    public function mint(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/nft/mint', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Transfer NFT token.
     *
     * @param  array  $data
     * @return array
     */
    public function transfer(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/nft/transaction', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Burn NFT token.
     *
     * @param  array  $data
     * @return array
     */
    public function burn(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/nft/burn', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get NFT metadata.
     *
     * @param  string  $chain
     * @param  string  $contractAddress
     * @param  string|int  $tokenId
     * @return array
     */
    public function metadata(
        string $chain,
        string $contractAddress,
        string|int $tokenId
    ): array {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/nft/metadata/{$chain}/{$contractAddress}/{$tokenId}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get NFT owner.
     *
     * @param  string  $chain
     * @param  string  $contractAddress
     * @param  string|int  $tokenId
     * @return array
     */
    public function owner(
        string $chain,
        string $contractAddress,
        string|int $tokenId
    ): array {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/nft/owner/{$chain}/{$contractAddress}/{$tokenId}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }
}