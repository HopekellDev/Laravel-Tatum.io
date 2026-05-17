<?php

/**
 * Laravel Tatum.io Marketplace Smart Contract Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\SmartContracts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Marketplace
{
    use HasHttpClient;

    /**
     * Deploy marketplace contract.
     */
    public function deploy(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/marketplace/deploy', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Create marketplace listing.
     */
    public function createListing(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/marketplace/listing', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Buy marketplace item.
     */
    public function buy(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/marketplace/buy', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Cancel marketplace listing.
     */
    public function cancel(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/marketplace/cancel', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get marketplace listing.
     */
    public function find(string $chain, string $listingId): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/marketplace/{$chain}/{$listingId}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get marketplace listings.
     */
    public function listings(string $chain): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/marketplace/{$chain}/listings"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }
}