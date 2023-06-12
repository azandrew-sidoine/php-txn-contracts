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
     * Returns the source address of the transaction.
     *
     * @return string
     */
    public function getFrom();

    /**
     * Returns the returns URL of the transaction payment.
     *
     * @return string
     */
    public function getReturnURL();

    /**
     * Returns the time at which transaction was performed
     * 
     * @return \DateTimeInterface 
     */
    public function getProcessorTransactionTime(): \DateTimeInterface;

    /**
     * returns the transaction payment unique id
     * 
     * @return string|int 
     */
    public function getProcessorTransactionId();

    /**
     * returns the transaction payment response
     * 
     * @return array|object 
     */
    public function getPaymentResponse();

    /**
     * return the transaction payeer id
     * 
     * @return array|object 
     */
    public function getPayeerId();

    /**
     * returns the transaction payment status text
     * 
     * @return string 
     */
    public function getTransactionStatusText();
}
