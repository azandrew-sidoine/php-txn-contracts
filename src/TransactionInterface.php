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
 * `Transaction` Refers to a payable entity (Ex: invoice in invoicing system) that have a given reference
 * to identify it. Transaction usually have a countable value, a weight (Ex: Currency in invoicing system),
 * the date and time at which the transaction was created and the status of the transaction.
 */
interface TransactionInterface extends HasValueMetadata
{
    /**
     * Returns unique identifying value of the transaction on all platform.
     *
     * @return string|int
     */
    public function getReference();

    /**
     * Returns the transaction id on the payment payment platform.
     *
     * @return string|int
     */
    public function getId();

    /**
     * Return the weight of the transaction. For currency based transactions, this can be
     * `XOF`, 'USD', 'EUR', etc...
     *
     * **Note**
     * Weight will impact during transaction value from conversion
     *
     * @return string
     */
    public function getWeight();

    /**
     * Date Time representation of the transaction create time.
     *
     * @return \DateTimeInterface
     */
    public function createdAt();

    /**
     * Returns true if the transaction is processed and false if not.
     *
     * @return bool
     */
    public function isProcessed();

    /**
     * Returns true is the transaction is still in pending state.
     *
     * @return mixed
     */
    public function isPending();
}
