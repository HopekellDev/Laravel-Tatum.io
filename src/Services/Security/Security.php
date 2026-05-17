<?php

/**
 * Laravel Tatum.io Security Service
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\Security;

class Security
{
    /**
     * Key Management System endpoints.
     *
     * @return \HopekellDev\Tatum\Services\Security\KeyManagementSystem
     */
    public function keyManagementSystem(): KeyManagementSystem
    {
        return new KeyManagementSystem();
    }
}