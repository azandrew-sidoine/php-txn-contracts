<?php

namespace Drewlabs\Txn;

interface TransactionPaymentInterface extends TransactionInterface
{
    /**
     * Returns the source address of the transaction
     *
     * @return string
     */
    public function getFrom();

    /**
     * Returns the returns URL of the transaction payment
     *
     * @return string
     */
    public function getReturnURL();
}
