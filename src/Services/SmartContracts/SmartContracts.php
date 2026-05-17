<?php

/**
 * Laravel Tatum.io Smart Contracts Service
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\SmartContracts;

class SmartContracts
{
    /**
     * NFT endpoints.
     *
     * @return \HopekellDev\Tatum\Services\SmartContracts\Nft
     */
    public function nft(): Nft
    {
        return new Nft();
    }

    /**
     * Fungible token endpoints.
     *
     * @return \HopekellDev\Tatum\Services\SmartContracts\FungibleTokens
     */
    public function fungibleTokens(): FungibleTokens
    {
        return new FungibleTokens();
    }

    /**
     * Multi token endpoints.
     *
     * @return \HopekellDev\Tatum\Services\SmartContracts\MultiTokens
     */
    public function multiTokens(): MultiTokens
    {
        return new MultiTokens();
    }

    /**
     * Auction endpoints.
     *
     * @return \HopekellDev\Tatum\Services\SmartContracts\Auction
     */
    public function auction(): Auction
    {
        return new Auction();
    }

    /**
     * Marketplace endpoints.
     *
     * @return \HopekellDev\Tatum\Services\SmartContracts\Marketplace
     */
    public function marketplace(): Marketplace
    {
        return new Marketplace();
    }

    /**
     * Gas pump endpoints.
     *
     * @return \HopekellDev\Tatum\Services\SmartContracts\GasPump
     */
    public function gasPump(): GasPump
    {
        return new GasPump();
    }
}