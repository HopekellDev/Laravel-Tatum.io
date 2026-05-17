<?php

/**
 * Laravel Tatum.io Blockchain RPC Service
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\BlockchainRpc;

use HopekellDev\Tatum\Services\BlockchainRpc\Xrp\Xrp;
use HopekellDev\Tatum\Services\BlockchainRpc\Tron\Tron;
use HopekellDev\Tatum\Services\BlockchainRpc\Bitcoin\Bitcoin;
use HopekellDev\Tatum\Services\BlockchainRpc\Polygon\Polygon;
use HopekellDev\Tatum\Services\BlockchainRpc\Solana\Solana;
use HopekellDev\Tatum\Services\BlockchainRpc\Dogecoin\Dogecoin;
use HopekellDev\Tatum\Services\BlockchainRpc\Ethereum\Ethereum;
use HopekellDev\Tatum\Services\BlockchainRpc\Litecoin\Litecoin;
use HopekellDev\Tatum\Services\BlockchainRpc\BnbSmartChain\BnbSmartChain;

class BlockchainRpc
{
    /**
     * Bitcoin RPC endpoints.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainRpc\Bitcoin\Bitcoin
     */
    public function bitcoin(): Bitcoin
    {
        return new Bitcoin();
    }

    /**
     * Ethereum RPC endpoints.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainRpc\Ethereum\Ethereum
     */
    public function ethereum(): Ethereum
    {
        return new Ethereum();
    }

    /**
     * BNB Smart Chain RPC endpoints.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainRpc\BnbSmartChain\BnbSmartChain
     */
    public function bnbSmartChain(): BnbSmartChain
    {
        return new BnbSmartChain();
    }

    /**
     * Polygon RPC endpoints.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainRpc\Polygon\Polygon
     */
    public function polygon(): Polygon
    {
        return new Polygon();
    }

    /**
     * Tron RPC endpoints.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainRpc\Tron\Tron
     */
    public function tron(): Tron
    {
        return new Tron();
    }

    /**
     * Solana RPC endpoints.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainRpc\Solana\Solana
     */
    public function solana(): Solana
    {
        return new Solana();
    }

    /**
     * Litecoin RPC endpoints.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainRpc\Litecoin\Litecoin
     */
    public function litecoin(): Litecoin
    {
        return new Litecoin();
    }

    /**
     * Dogecoin RPC endpoints.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainRpc\Dogecoin\Dogecoin
     */
    public function dogecoin(): Dogecoin
    {
        return new Dogecoin();
    }

    /**
     * XRP RPC endpoints.
     *
     * @return \HopekellDev\Tatum\Services\BlockchainRpc\Xrp\Xrp
     */
    public function xrp(): Xrp
    {
        return new Xrp();
    }
}