<?php

/**
 * Laravel Tatum.io Blockchain Notifications Service
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainNotifications;

class BlockchainNotifications
{
    /**
     * Subscription endpoints.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainNotifications\Subscriptions
     */
    public function subscriptions(): Subscriptions
    {
        return new Subscriptions();
    }

    /**
     * Notification endpoints.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainNotifications\Notifications
     */
    public function notifications(): Notifications
    {
        return new Notifications();
    }
}