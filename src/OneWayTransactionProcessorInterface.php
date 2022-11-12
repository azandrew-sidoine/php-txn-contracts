<?php

namespace Drewlabs\Txn;

interface OneWayTransactionProcessorInterface
{
    /**
     * Add a listener to the result of process transaction action
     *
     * @param TransactionResultListener|\Closure<ProcessTransactionResultInterface> $callback
     *
     * @return void
     */
    public function addTransactionResponseLister($callback);
}
