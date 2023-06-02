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
 * {@inheritDoc}
 *
 * A `Transactional Processor Library` provides API similar to `Processor Library` entity
 * as it inherit from the processor library contract. It adds a `requestOTP` method that
 * make request to send OTP to transactor using the implementation of their choice
 */
interface TransactionalProcessorLibraryInterface extends ProcessorLibraryInterface
{
    /**
     * Request of an OTP used by client to process a transaction.
     * It returns a boolean value indicating the successful state of the request.
     *
     * @return bool
     */
    public function requestOTP(string $payeerid);
}
