<?php

/**
 * Laravel Tatum.io Virtual Account Transaction Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\VirtualAccounts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class Transaction
{
    use HasHttpClient;

    /**
     * Create ledger transaction.
     */
    public function create(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/ledger/transaction', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get transaction by ID.
     */
    public function find(string $transactionId): array
    {
        $response = ApiResponse::format(
            $this->http()->get("/v3/ledger/transaction/{$transactionId}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get account transactions.
     */
    public function byAccount(
        string $accountId,
        ?int $pageSize = null,
        ?int $offset = null
    ): array {
        $query = array_filter([
            'pageSize' => $pageSize,
            'offset'   => $offset,
        ]);

        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/ledger/account/{$accountId}/transaction",
                $query
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Create internal transfer.
     */
    public function transfer(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/ledger/transaction/internal', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Create reversal transaction.
     */
    public function reversal(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/ledger/transaction/reversal', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }
}