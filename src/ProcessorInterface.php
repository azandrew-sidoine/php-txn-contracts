<?php

namespace Drewlabs\Txn;

interface ProcessorInterface
{
    /**
     * Returns the unique id of the processor
     *
     * @return string|int
     */
    public function getId();

    /**
     * Returns the unique processor name
     *
     * @return string
     */
    public function getName();

    /**
     * True if the procesor is active or not
     *
     * @return bool
     */
    public function isActivated();

    /**
     * Returns the payment process type of the processor. Payment process type can
     * be a PUSH, TRANSACTIONAL payment process type
     *
     * @return string|int
     */
    public function getPaymentProcessType();

    /**
     * Based analysis phases processor supports 2 types of transaction.
     * 
     * PUSH Txn: `PUSH` type of transaction depends on user interacting with a 
     *           push receiver device to validate transaction. For such transactions
     *           user are only required to provide an identifier to process transaction
     * 
     * TRANSACTIONAL Txn: `TRANSACTIONAL` type of transaction on the other hand is handled
     *                   in 2 or more step. User provide platform with processor identifier 
     *                   to request for a transaction validation code, which is used to confirm
     *                   the started transaction. The name of this type of transaction comes from
     *                   the more than one step involve in processing a transaction.
     * 
     * @return bool 
     */
    public function isTransactional();
}
