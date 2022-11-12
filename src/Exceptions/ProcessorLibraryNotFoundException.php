<?php

namespace Drewlabs\Txn\Exceptions;

use Exception;

class ProcessorLibraryNotFoundException extends Exception
{
    /**
     * Creates a {@see ProcessorLibraryNotFoundException} instance
     *
     * @param string $library
     */
    public function __construct(string $library)
    {
        $message = "Missing library $library";
        parent::__construct($message, 404);
    }
}
