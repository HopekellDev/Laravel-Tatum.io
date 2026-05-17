<?php

/**
 * Laravel Tatum.io Order Book Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\VirtualAccounts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class OrderBook
{
    use HasHttpClient;

    /**
     * Create order book trade.
     */
    public function createTrade(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/trade', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get trade by ID.
     */
    public function findTrade(string $id): array
    {
        $response = ApiResponse::format(
            $this->http()->get("/v3/trade/{$id}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get all trades.
     */
    public function trades(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/trade')
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Delete trade.
     */
    public function deleteTrade(string $id): array
    {
        $response = ApiResponse::format(
            $this->http()->delete("/v3/trade/{$id}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Create order book.
     */
    public function createOrderBook(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/orderbook', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get order book by ID.
     */
    public function findOrderBook(string $id): array
    {
        $response = ApiResponse::format(
            $this->http()->get("/v3/orderbook/{$id}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get all order books.
     */
    public function orderBooks(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/orderbook')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}