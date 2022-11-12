<?php

namespace Drewlabs\Txn\Exceptions;

use Exception;

class InvalidProcessorOTPException extends Exception
{
    /**
     * Creates an instance of {@see InvalidOTPException}
     *
     * @param string|int $otp
     * @return void
     */
    public function __construct($otp)
    {
        $message = null === $otp ? "Processor otp is required" : "Processor otp (" . (string)$otp . ") is invalid";
        parent::__construct($message, 422);
    }
}
