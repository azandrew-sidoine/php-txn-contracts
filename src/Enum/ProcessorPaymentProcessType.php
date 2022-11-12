<?php

namespace Drewlabs\Txn\Enum;

class ProcessorPaymentProcessType
{
    /**
     * Transactional payment process type will require
     * an OTP code to validate the payment
     *
     * @var string
     */
    public const TRANSACTIONAL = 1;

    /**
     * Non Transactional payment process type, send Push notifications
     * to client device to validate payments
     *
     * @var string
     */
    public const PUSH = 2;


    /**
     * List of Processor Payment Process Types values
     *
     * @var int[]
     */
    public const VALUES = [self::PUSH, self::TRANSACTIONAL];

    /**
     * List of Processor Payment Process Types values as string
     *
     * @var string[]
     */
    public const STRING_VALUES = ['TRANSACTIONAL', 'PUSH'];

    /**
     * Query for the value of a payment process type
     *
     * @param string $type
     * @return string
     */
    public static function processType(string $type)
    {
        switch (strtoupper($type)) {
            case 'TRANSACTIONAL':
                return self::TRANSACTIONAL;
            case 'PUSH':
                return self::PUSH;
            default:
                return self::TRANSACTIONAL;
        }
    }


    /**
     * Query for the string value of a payment process type
     *
     * @param int $type
     * @return string
     */
    public static function processTypeString(int $type)
    {
        switch ($type) {
            case  self::TRANSACTIONAL:
                return 'TRANSACTIONAL';
            case self::PUSH:
                return 'PUSH';
            default:
                return 'TRANSACTIONAL';
        }
    }
}
