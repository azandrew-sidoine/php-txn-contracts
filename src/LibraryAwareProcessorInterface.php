<?php

namespace Drewlabs\Txn;

/**
 * {@inheritDoc}
 * 
 * A `Library Aware Processor` is a transaction processor that has it client
 * library buildable by a library manager package a.k.a `drewlabs/libman` for 
 * instance. It provides a method that returns a library name or identifier that
 * might be used by the factory class to create the client.
 * 
 * @package Drewlabs\Txn
 */
interface LibraryAwareProcessorInterface extends ProcessorInterface
{
    /**
     * Returns the library id attached to the processor
     *
     * @return string
     */
    public function getLibrary();

}
