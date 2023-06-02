<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Txn;

/**
 * In the context on this information technology implementation, an Invoicer Plaform defines
 * an entity that makes request for invoice transactions on the gateway platform. `Invoicer Platforms`
 * are defines by their name, address, domain, and authorization credentials.
 */
interface TransactionInitiatorPlatform
{
    /**
     * Get the virtual/numerical address of the invoicer platform.
     *
     * @return string
     */
    public function getAddress();

    /**
     * Returns the Domain identifier of the Invoicer platform.
     *
     * @return string
     */
    public function getDomain();

    /**
     * Returns the list of invoicer plaform credentials.
     *
     * @return TransactionInitiatorPlatformCredential[]|\Traversable<TransactionInitiatorPlatform>
     */
    public function getCredentials();

    /**
     * Returns the active/inactive state of the platform entity.
     *
     * @return bool
     */
    public function isActive();
}
