<?php

namespace Drewlabs\Txn;

interface BelongsToPlatformTransaction extends TransactionInterface
{

    /**
     * Returns the platform to which the transaction belongs
     * 
     * @return TransactionInitiatorPlatform 
     */
    public function platform();
}
