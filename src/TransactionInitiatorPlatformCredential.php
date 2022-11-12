<?php

namespace Drewlabs\Txn;

interface TransactionInitiatorPlatformCredential
{
    /**
     * Authorizable `id` property getter
     * 
     * @return string 
     */
    public function id();
    /**
     * Authorizable `secret` property getter
     * 
     * @return string 
     */
    public function secret();
}
