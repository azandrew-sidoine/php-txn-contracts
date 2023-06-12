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

interface ProcessedTransactionPaymentInterface extends TransactionPaymentInterface
{
    /**
     * return the time at which transaction was performed.
     * 
     * @return \DateTimeInterface
     */
    public function getProcessorTransactionTime();

    /**
     * returns the transaction payment unique id.
     *
     * @return string|int
     */
    public function getProcessorTransactionId();

    /**
     * returns the transaction payment response.
     *
     * @return array|object
     */
    public function getPaymentResponse();

    /**
     * returns the transaction payment status text.
     *
     * @return string
     */
    public function getTransactionStatusText();
}
