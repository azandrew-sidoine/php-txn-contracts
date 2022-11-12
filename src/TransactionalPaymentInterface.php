<?php

namespace Drewlabs\Txn;

interface TransactionalPaymentInterface
{
    /**
     * Returns the OTP value to be used by the processor library when sending process request
     *
     * @return string
     */
    public function getOTP();
}
