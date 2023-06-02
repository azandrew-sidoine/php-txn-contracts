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

interface TransactionResultListener
{
    /**
     * Provides an implementation that gets invoke when a process transaction action is completed.
     *
     * @param ProcessTransactionResultInterface $result Process Transaction result
     *
     * @return void
     */
    public function __invoke(ProcessTransactionResultInterface $result);
}
