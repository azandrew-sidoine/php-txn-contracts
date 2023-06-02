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

interface ProcessTransactionResultInterface
{
    /**
     * Transaction reference of the processor plaform.
     *
     * @return string|int
     */
    public function getProcessorReference();

    /**
     * Returns the reference of the transaction created on the transaction platform.
     *
     * @return string|int
     */
    public function getReference();

    /**
     * Returns the date time at wich the transaction was processed.
     *
     * @return \DateTimeInterface
     */
    public function processedAt();

    /**
     * The tranasction status text.
     *
     * @return string
     */
    public function getStatusText();

    /**
     * Transaction processor response object.
     *
     * @return array|object
     */
    public function getResponse();

    /**
     * Boolean value indicating validated transactions.
     *
     * @return bool
     */
    public function isValidated();
}
