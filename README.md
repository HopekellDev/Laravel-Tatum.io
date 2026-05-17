# ⛓ HopekellDev Laravel Tatum.io

![Packagist Version](https://img.shields.io/packagist/v/hopekelldev/laravel-tatum-io)
![PHP Version](https://img.shields.io/packagist/php-v/hopekelldev/laravel-tatum-io)
![Laravel Version](https://img.shields.io/badge/Laravel-13.x-red)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
![Downloads](https://img.shields.io/packagist/dt/hopekelldev/laravel-tatum-io)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/HopekellDev/Laravel-Tatum.io/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/HopekellDev/Laravel-Tatum.io/?branch=main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/HopekellDev/Laravel-Tatum.io/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)
[![Build Status](https://scrutinizer-ci.com/g/HopekellDev/Laravel-Tatum.io/badges/build.png?b=main)](https://scrutinizer-ci.com/g/HopekellDev/Laravel-Tatum.io/build-status/main)

---

![Laravel Tatum.io Banner](https://raw.githubusercontent.com/HopekellDev/Laravel-Tatum.io/main/assets/banner.png)

## 🚀 Introduction

**HopekellDev Laravel Tatum.io** is a modern, lightweight, and developer-friendly Laravel SDK for selected Tatum.io APIs.

Built specifically for:

- ⚡ Laravel 10, 11, 12 & 13
- 🧠 PHP 8.2+
- ⛓ Blockchain infrastructure
- 💰 Virtual accounts
- 🪙 Smart contracts
- 🔥 NFT & token operations
- 🛡 KMS security operations
- 📦 Laravel auto-discovery

This package provides a clean Laravel-style fluent API structure for interacting with Tatum blockchain infrastructure.

---

## ✨ Features

- ✅ Laravel auto-discovery
- ✅ Modern fluent API structure
- ✅ Blockchain RPC support
- ✅ NFT smart contract support
- ✅ ERC-20 token support
- ✅ ERC-1155 token support
- ✅ Marketplace support
- ✅ Auction support
- ✅ Gas Pump support
- ✅ Virtual Accounts support
- ✅ Blockchain utility helpers
- ✅ KMS security endpoints
- ✅ Standardized API responses
- ✅ Built-in exception handling
- ✅ Easily extendable architecture

---

## 📦 Installation

```bash
composer require hopekelldev/laravel-tatum-io
```

Publish config:

```bash
php artisan vendor:publish --tag=tatum-config
```

---

## ⚙️ Configuration

Add your Tatum credentials to `.env`

```env
TATUM_API_KEY=your_api_key
TATUM_BASE_URL=https://api.tatum.io
TATUM_TIMEOUT=30
TATUM_THROW_EXCEPTIONS=true
```

---

## 🧪 Quick Usage

```php
use HopekellDev\Tatum\Facades\Tatum;

$response = Tatum::blockchainRpc()
    ->bitcoin()
    ->generateWallet();

return $response;
```

---

# 📘 Documentation

## ⛓ Blockchain RPC

Supported chains:

- Bitcoin
- Ethereum
- BNB Smart Chain
- Polygon
- Tron
- Solana
- Litecoin
- Dogecoin
- XRP

### Bitcoin Wallet

```php
Tatum::blockchainRpc()
    ->bitcoin()
    ->generateWallet();
```

### Ethereum Balance

```php
Tatum::blockchainRpc()
    ->ethereum()
    ->getBalance($address);
```

---

## 🪙 Smart Contracts

### NFT Minting

```php
Tatum::smartContracts()
    ->nft()
    ->mint($data);
```

### ERC-20 Token Transfer

```php
Tatum::smartContracts()
    ->fungibleTokens()
    ->transfer($data);
```

### Marketplace Listing

```php
Tatum::smartContracts()
    ->marketplace()
    ->createListing($data);
```

---

## 🏦 Virtual Accounts

### Create Virtual Account

```php
Tatum::virtualAccounts()
    ->account()
    ->create($data);
```

### Create Customer

```php
Tatum::virtualAccounts()
    ->customer()
    ->create($data);
```

### Create Withdrawal

```php
Tatum::virtualAccounts()
    ->withdrawal()
    ->create($data);
```

---

## 🔔 Blockchain Notifications

```php
Tatum::blockchainNotifications()
    ->subscriptions()
    ->all();
```

---

## 🛡 Security

### KMS Sign Transaction

```php
Tatum::security()
    ->keyManagementSystem()
    ->sign($data);
```

---

## 🧰 Utilities

### Broadcast Transaction

```php
Tatum::utils()
    ->blockchainUtils()
    ->broadcast($data);
```

---

# 📚 Covered Modules

## ✅ Blockchain RPC

- Bitcoin
- Ethereum
- BSC
- Polygon
- Tron
- Solana
- Litecoin
- Dogecoin
- XRP

## ✅ Smart Contracts

- NFT (ERC-721)
- Fungible Tokens (ERC-20)
- Multi Tokens (ERC-1155)
- Marketplace
- Auction
- Gas Pump

## ✅ Security

- Key Management System

## ✅ Virtual Accounts

- Account
- Transaction
- Customer
- Virtual Currency
- Order Book
- Blockchain Addresses
- Blockchain Operations
- Blockchain Fees
- Deposit
- Withdrawal

## ✅ Blockchain Notifications

- Subscriptions
- Notifications

## ✅ Utilities

- Blockchain Utilities
- Service Utilities

---

# ⚠️ Error Handling

```php
use HopekellDev\Tatum\Facades\Tatum;
use HopekellDev\Tatum\Exceptions\TatumException;

try {

    $wallet = Tatum::blockchainRpc()
        ->bitcoin()
        ->generateWallet();

} catch (TatumException $e) {

    return $e->getMessage();

}
```

---

# 🧱 Package Architecture

```txt
Tatum
├── Services
│   ├── BlockchainNotifications
│   ├── BlockchainRpc
│   ├── SmartContracts
│   ├── Security
│   ├── VirtualAccounts
│   └── Utils
├── Helpers
│   ├── Http Client
│   └── Response Formatter
└── Exceptions
```

---

# 🤝 Contributing

Contributions are welcome.

You can help by:

- Adding more Tatum endpoints
- Improving documentation
- Writing tests
- Improving blockchain coverage
- Improving developer experience

---

# 🔥 Roadmap

- [ ] Webhook signature verification
- [ ] Retry middleware
- [ ] Logging support
- [ ] Pest test suite
- [ ] GitHub Actions CI
- [ ] Mock responses for testing

---

# 🛡 License

This package is open-sourced software licensed under the MIT License.

---

# 👨‍💻 Author

**HopekellDev**

Building scalable fintech, blockchain, SaaS, and backend systems.

- GitHub: https://github.com/HopekellDev
- Email: hopekelltech@gmail.com

---

# ⭐ Support

If this package helps you, please support it by:

- Starring the repository
- Sharing with Laravel developers
- Reporting bugs
- Suggesting improvements
- Contributing code

---

> Built for Laravel developers who need a clean, modern, and extendable Tatum.io SDK.
