<?php

namespace Drewlabs\Txn;

use Drewlabs\Txn\Exceptions\ProcessorLibraryNotFoundException;

/**
 * A `Processor Library Factory` provides API for creating a processor client
 * based on the processor configuration values.
 * 
 * @package Drewlabs\Txn
 */
interface ProcessorLibraryFactoryInterface
{
    /**
     * Creates a processor Library based on processor instance
     *
     * @param LibraryAwareProcessorInterface $processor
     * @return ProcessorLibraryInterface|TransactionalProcessorLibraryInterface
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     * @throws ProcessorLibraryNotFoundException
     */
    public function createInstance($processor);
}
