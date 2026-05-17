<?php

/**
 * Laravel Tatum.io Utils Service
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\Utils;

class Utils
{
    /**
     * Blockchain utility endpoints.
     */
    public function blockchainUtils(): BlockchainUtils
    {
        return new BlockchainUtils();
    }

    /**
     * Service utility endpoints.
     */
    public function serviceUtils(): ServiceUtils
    {
        return new ServiceUtils();
    }
}