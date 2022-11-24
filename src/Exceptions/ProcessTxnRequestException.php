<?php

namespace Drewlabs\Txn\Exceptions;

use Drewlabs\Txn\TransactionPaymentInterface;

class ProcessTxnRequestException extends RequestException
{
    /**
     * 
     * @var TransactionPaymentInterface
     */
    private $payment;

    /**
     * Creates an instance of {@see \Drewlabs\Txn\Exceptions\ProcessTxnRequestException} exception class
     * 
     * @param TransactionPaymentInterface $payment 
     * @param string|null $message 
     * @return void 
     */
    public function __construct(TransactionPaymentInterface $payment, string $message = null)
    {
        $message = $message ?? "Error while processing txn " . $payment->getId();
        parent::__construct($message);
        $this->payment = $payment;   
    }

    /**
     * Returns the txn payment instance
     * 
     * @return TransactionPaymentInterface 
     */
    public function getPayment(): TransactionPaymentInterface
    {
        return $this->payment;
    }
}