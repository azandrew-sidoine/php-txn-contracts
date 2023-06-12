<?php

namespace Drewlabs\Txn;

interface PaymentAware
{
    /**
     * returns the transaction payment instance
     * 
     * @return TransactionPaymentInterface 
     */
    public function getPayment(): TransactionPaymentInterface;
}