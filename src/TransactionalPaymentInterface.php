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

interface TransactionalPaymentInterface
{
    /**
     * Returns the OTP value to be used by the processor library when sending process request.
     *
     * @return string
     */
    public function getOTP();
}
