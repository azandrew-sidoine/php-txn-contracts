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

/**
 * ErrorCodes class provides constant for various exceptions or request errors does
 * can occurs during a payment process using a processor.
 */
class ErrorCodes
{
    /**
     * OTP expires error code.
     */
    public const OTP_EXPIRES_ERROR = 4010;

    /**
     * OTP code invalid error code.
     */
    public const OTP_INVALID_ERROR = 4220;

    /**
     * Connection Timeout.
     */
    public const SESSION_TIMEOUT = 4008;

    /**
     * Origin server not reachable error code.
     */
    public const UNREACHABLE_ORIGIN = 5230;

    /**
     * Authorization error code.
     */
    public const AUTHORIZATION_ERROR = 4001;

    /**
     * General case error code.
     */
    public const UNKNOWN_ERROR = 5000;
}
