<?php

/**
 * Laravel Tatum.io Main SDK Class
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum;

use HopekellDev\Tatum\Services\Utils\Utils;
use HopekellDev\Tatum\Services\Security\Security;
use HopekellDev\Tatum\Services\BlockchainRpc\BlockchainRpc;
use HopekellDev\Tatum\Services\SmartContracts\SmartContracts;
use HopekellDev\Tatum\Services\VirtualAccounts\VirtualAccounts;
use HopekellDev\Tatum\Services\BlockchainNotifications\BlockchainNotifications;

class Tatum
{
    /**
     * Blockchain Notifications Service.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainNotifications\BlockchainNotifications
     */
    public function blockchainNotifications(): BlockchainNotifications
    {
        return new BlockchainNotifications();
    }

    /**
     * Blockchain RPC Service.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainRpc\BlockchainRpc
     */
    public function blockchainRpc(): BlockchainRpc
    {
        return new BlockchainRpc();
    }

    /**
     * Smart Contracts Service.
     *
     * @return \HopekellDev\Tatum\Services\SmartContracts\SmartContracts
     */
    public function smartContracts(): SmartContracts
    {
        return new SmartContracts();
    }

    /**
     * Security Service.
     *
     * @return \HopekellDev\Tatum\Services\Security\Security
     */
    public function security(): Security
    {
        return new Security();
    }

    /**
     * Virtual Accounts Service.
     *
     * @return \HopekellDev\Tatum\Services\VirtualAccounts\VirtualAccounts
     */
    public function virtualAccounts(): VirtualAccounts
    {
        return new VirtualAccounts();
    }

    /**
     * Utils Service.
     *
     * @return \HopekellDev\Tatum\Services\Utils\Utils
     */
    public function utils(): Utils
    {
        return new Utils();
    }
}