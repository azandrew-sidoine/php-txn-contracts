<?php

namespace Drewlabs\Txn;

interface ProcessorLibraryInterface
{

    /**
     * Creates an instance of {@see ProcessTransactionResultInterface} from processor response
     *
     * @param array|object $response
     * @return ProcessTransactionResultInterface
     */
    public function toProcessTransactionResult($response);

    /**
     * Process a transaction object using the processor implementation
     *
     * @param TransactionPaymentInterface $transaction
     * @return bool
     */
    public function processTransaction(TransactionPaymentInterface $transaction);
}
