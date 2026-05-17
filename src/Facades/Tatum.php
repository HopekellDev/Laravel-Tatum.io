<?php

/**
 * Laravel Tatum.io Facade
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \HopekellDev\Tatum\Services\BlockchainNotifications\BlockchainNotifications blockchainNotifications()
 * @method static \HopekellDev\Tatum\Services\BlockchainRpc\BlockchainRpc blockchainRpc()
 * @method static \HopekellDev\Tatum\Services\SmartContracts\SmartContracts smartContracts()
 * @method static \HopekellDev\Tatum\Services\Security\Security security()
 * @method static \HopekellDev\Tatum\Services\VirtualAccounts\VirtualAccounts virtualAccounts()
 * @method static \HopekellDev\Tatum\Services\Utils\Utils utils()
 *
 * @see \HopekellDev\Tatum\Tatum
 */
class Tatum extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'tatum';
    }
}