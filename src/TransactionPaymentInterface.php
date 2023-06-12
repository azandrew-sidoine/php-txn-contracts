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

interface TransactionPaymentInterface extends TransactionInterface
{
    /**
     * returns the source address of the transaction.
     *
     * @return string
     */
    public function getFrom();

    /**
     * return the returns URL of the transaction payment.
     *
     * @return string
     */
    public function getReturnURL();
}
