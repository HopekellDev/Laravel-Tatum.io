<?php

/**
 * Laravel Tatum.io Auction Smart Contract Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\SmartContracts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Auction
{
    use HasHttpClient;

    /**
     * Deploy auction contract.
     */
    public function deploy(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/auction/deploy', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Create auction listing.
     */
    public function create(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/auction/create', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Place auction bid.
     */
    public function bid(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/auction/bid', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * End auction.
     */
    public function close(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/auction/close', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get auction detail.
     */
    public function find(string $chain, string $auctionId): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/auction/{$chain}/{$auctionId}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Cancel auction.
     */
    public function cancel(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/auction/cancel', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }
}