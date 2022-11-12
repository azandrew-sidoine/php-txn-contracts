<?php

namespace Drewlabs\Txn\Enum;

class TransactionStatus
{
    /**
     * Pending Transaction status enumerated value
     *
     * @var int
     */
    public const PENDING = 0;

    /**
     * Validated Transaction status enumerated value
     *
     * @var int
     */
    public const VALIDATED = 1;

    /**
     * Failed Transaction status enumerated value
     *
     * @var int
     */
    public const FAILED = 2;
}
