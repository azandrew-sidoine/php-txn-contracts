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

namespace Drewlabs\Txn\Exceptions;

use Drewlabs\Txn\TransactionPaymentInterface;

class ProcessTxnRequestException extends RequestException
{
    /**
     * @var TransactionPaymentInterface
     */
    private $payment;

    /**
     * Creates an instance of {@see \Drewlabs\Txn\Exceptions\ProcessTxnRequestException} exception class.
     *
     * @return void
     */
    public function __construct(TransactionPaymentInterface $payment, string $message = null)
    {
        $message ??= 'Error while processing txn '.$payment->getId();
        parent::__construct($message);
        $this->payment = $payment;
    }

    /**
     * Returns the txn payment instance.
     */
    public function getPayment(): TransactionPaymentInterface
    {
        return $this->payment;
    }
}
