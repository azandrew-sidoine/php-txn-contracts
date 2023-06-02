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

/**
 * A `Processor Library` is an entity used by the gateway service to process transactions.
 */
interface ProcessorLibraryInterface
{
    /**
     * Creates an instance of {@see ProcessTransactionResultInterface} from processor response.
     *
     * @param array|object $response
     *
     * @return ProcessTransactionResultInterface
     */
    public function toProcessTransactionResult($response);

    /**
     * Process a transaction object using the processor implementation.
     *
     * @return bool
     */
    public function processTransaction(TransactionPaymentInterface $transaction);
}
