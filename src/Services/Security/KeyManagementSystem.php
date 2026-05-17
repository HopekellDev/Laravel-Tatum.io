<?php

/**
 * Laravel Tatum.io Key Management System Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\Security;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class KeyManagementSystem
{
    use HasHttpClient;

    /**
     * Store private key in KMS.
     */
    public function store(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/kms/store', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get KMS key detail.
     */
    public function find(string $id): array
    {
        $response = ApiResponse::format(
            $this->http()->get("/v3/kms/{$id}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Delete KMS key.
     */
    public function delete(string $id): array
    {
        $response = ApiResponse::format(
            $this->http()->delete("/v3/kms/{$id}")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Export KMS key.
     */
    public function export(string $id): array
    {
        $response = ApiResponse::format(
            $this->http()->post("/v3/kms/{$id}/export")
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Sign transaction using KMS.
     */
    public function sign(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/kms/sign', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * List KMS keys.
     */
    public function all(): array
    {
        $response = ApiResponse::format(
            $this->http()->get('/v3/kms')
        );

        $this->throwIfFailed($response);

        return $response;
    }
}