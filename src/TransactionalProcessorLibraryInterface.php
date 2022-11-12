<?php


namespace Drewlabs\Txn;

/**
 * {@inheritDoc}
 * 
 * A `Transactional Processor Library` provides API similar to `Processor Library` entity
 * as it inherit from the processor library contract. It adds a `requestOTP` method that 
 * make request to send OTP to transactor using the implementation of their choice
 * 
 * @package Drewlabs\Txn
 */
interface TransactionalProcessorLibraryInterface extends ProcessorLibraryInterface
{
    /**
     * Request of an OTP used by client to process a transaction.
     * It returns a boolean value indicating the successful state of the request
     *
     * @param string $payeerid
     * @return bool
     */
    public function requestOTP(string $payeerid);
}
