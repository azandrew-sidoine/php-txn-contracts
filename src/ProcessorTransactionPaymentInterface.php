<?php

namespace Drewlabs\Txn;

use Drewlabs\Txn\TransactionPaymentInterface;
use Drewlabs\Txn\ProcessorInterface;
use Drewlabs\Txn\LibraryAwareProcessorInterface;

interface ProcessorTransactionPaymentInterface extends TransactionPaymentInterface
{
    /**
     * Returns the processor object attached to the transaction
     *
     * @return LibraryAwareProcessorInterface|ProcessorInterface
     */
    public function getProcessor();
}
