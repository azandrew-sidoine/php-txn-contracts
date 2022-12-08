<?php

namespace Drewlabs\Txn\Enum;

/**
 * ErrorCodes class provides constant for various exceptions or request errors does
 * can occurs during a payment process using a processor
 * 
 * @package Drewlabs\Txn\Enum
 */
class ErrorCodes
{
    /**
     * OTP expires error code
     */
    const OTP_EXPIRES_ERROR = 4010;

    /**
     * OTP code invalid error code
     */
    const OTP_INVALID_ERROR = 4220;

    /**
     * Connection Timeout 
     */
    const SESSION_TIMEOUT = 4008;

    /**
     * Origin server not reachable error code
     */
    const UNREACHABLE_ORIGIN = 5230;

    /**
     * Authorization error code
     */
    const AUTHORIZATION_ERROR = 4001;

    /**
     * General case error code
     */
    const UNKNOWN_ERROR = 5000;
}