<?php

/**
 * Laravel Tatum.io Gas Pump Smart Contract Endpoints
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\SmartContracts;

use HopekellDev\Tatum\Helpers\ApiResponse;
use HopekellDev\Tatum\Helpers\HasHttpClient;

class GasPump
{
    use HasHttpClient;

    /**
     * Activate gas pump address.
     */
    public function activate(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/gas-pump/activate', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Deactivate gas pump address.
     */
    public function deactivate(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/gas-pump/deactivate', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get gas pump address detail.
     */
    public function find(string $chain, string $address): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/gas-pump/{$chain}/{$address}"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Get gas pump transaction history.
     */
    public function transactions(string $chain, string $address): array
    {
        $response = ApiResponse::format(
            $this->http()->get(
                "/v3/gas-pump/{$chain}/{$address}/transactions"
            )
        );

        $this->throwIfFailed($response);

        return $response;
    }

    /**
     * Estimate gas pump fees.
     */
    public function estimate(array $data): array
    {
        $response = ApiResponse::format(
            $this->http()->post('/v3/gas-pump/estimate', $data)
        );

        $this->throwIfFailed($response);

        return $response;
    }
}