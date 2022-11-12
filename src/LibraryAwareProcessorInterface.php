<?php

namespace Drewlabs\Txn;

interface LibraryAwareProcessorInterface extends ProcessorInterface
{
    /**
     * Returns the library id attached to the processor
     *
     * @return string
     */
    public function getLibrary();

}
