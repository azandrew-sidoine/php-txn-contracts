<?php

namespace Drewlabs\Txn\Exceptions;

use Exception;

class ProcessorNotFoundException extends Exception
{
    /**
     * Creates an instance of {@see ProcessorNotFoundException}
     * 
     * @param string $processor 
     * @return self 
     */
    public function __construct(string $processor)
    {
        $message = "Processor $processor does not exists!";
        parent::__construct($message);
    }
}
