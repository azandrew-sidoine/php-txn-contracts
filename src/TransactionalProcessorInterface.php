<?php


namespace Drewlabs\Txn;

interface TransactionalProcessorInterface extends ProcessorLibraryInterface
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
