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

namespace Drewlabs\Txn\Exceptions;

class InvalidProcessorOTPException extends \Exception
{
    /**
     * Creates an instance of {@see InvalidOTPException}.
     *
     * @param string|int $otp
     *
     * @return void
     */
    public function __construct($otp)
    {
        $message = null === $otp ? 'Processor otp is required' : 'Processor otp ('.(string) $otp.') is invalid';
        parent::__construct($message, 422);
    }
}
