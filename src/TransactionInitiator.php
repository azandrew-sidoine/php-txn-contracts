<?php

namespace Drewlabs\Txn;

/**
 * In the context of this library/package a transaction initiator is the entity that produces/creates
 * a transation ( a {@see TransactionInterface} in our dialect ). Based on system requirements
 * a transaction initiator has name, a list of clients (web service, client application, etc...) and an active or inactive state
 * 
 * @package Drewlabs\Txn
 */
interface TransactionInitiator
{

    /**
     * Returns the name of the invoicer
     * 
     * @return mixed 
     */
    public function getName();

    /**
     * Returns the list of iterable invoicer platform
     * 
     * @return TransactionInitiatorPlatform[]|\Traversable<TransactionInitiatorPlatform>
     */
    public function getPlatforms();

    /**
     * Returns the active/inactive state of the platform entity
     * 
     * @return bool 
     */
    public function isActive();

}