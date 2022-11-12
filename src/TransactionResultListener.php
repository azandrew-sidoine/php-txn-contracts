<?php


namespace Drewlabs\Txn;

interface TransactionResultListener
{
    /**
     * Provides an implementation that gets invoke when a process transaction action is completed
     *
     * @param ProcessTransactionResultInterface $result Process Transaction result
     *
     * @return void
     */
    public function __invoke(ProcessTransactionResultInterface $result);
}
