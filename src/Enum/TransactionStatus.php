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

namespace Drewlabs\Txn\Enum;

class TransactionStatus
{
    /**
     * Pending Transaction status enumerated value.
     *
     * @var int
     */
    public const PENDING = 0;

    /**
     * Validated Transaction status enumerated value.
     *
     * @var int
     */
    public const VALIDATED = 1;

    /**
     * Failed Transaction status enumerated value.
     *
     * @var int
     */
    public const FAILED = 2;
}
