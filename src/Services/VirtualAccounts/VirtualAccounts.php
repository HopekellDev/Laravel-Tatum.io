<?php

/**
 * Laravel Tatum.io Virtual Accounts Service
 *
 * @package   hopekelldev/laravel-tatum-io
 * @author    Ezenwa Hopekell <hopekelltech@gmail.com>
 * @username  HopekellDev
 * @copyright 2026 HopekellDev
 */

namespace HopekellDev\Tatum\Services\VirtualAccounts;

class VirtualAccounts
{
    /**
     * Account endpoints.
     */
    public function account(): Account
    {
        return new Account();
    }

    /**
     * Transaction endpoints.
     */
    public function transaction(): Transaction
    {
        return new Transaction();
    }

    /**
     * Customer endpoints.
     */
    public function customer(): Customer
    {
        return new Customer();
    }

    /**
     * Virtual currency endpoints.
     */
    public function virtualCurrency(): VirtualCurrency
    {
        return new VirtualCurrency();
    }

    /**
     * Order book endpoints.
     */
    public function orderBook(): OrderBook
    {
        return new OrderBook();
    }

    /**
     * Blockchain address endpoints.
     */
    public function blockchainAddresses(): BlockchainAddresses
    {
        return new BlockchainAddresses();
    }

    /**
     * Blockchain operation endpoints.
     */
    public function blockchainOperations(): BlockchainOperations
    {
        return new BlockchainOperations();
    }

    /**
     * Blockchain fee endpoints.
     */
    public function blockchainFees(): BlockchainFees
    {
        return new BlockchainFees();
    }

    /**
     * Deposit endpoints.
     */
    public function deposit(): Deposit
    {
        return new Deposit();
    }

    /**
     * Withdrawal endpoints.
     */
    public function withdrawal(): Withdrawal
    {
        return new Withdrawal();
    }
}