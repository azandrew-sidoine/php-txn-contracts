<?php

namespace Drewlabs\Txn;

use Drewlabs\Txn\Exceptions\ProcessorLibraryNotFoundException;

interface ProcessorLibraryFactoryInterface
{
    /**
     * Creates a processor Library based on processor instance
     *
     * @param LibraryAwareProcessorInterface $processor
     * @return ProcessorLibraryInterface|TransactionalProcessorInterface
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     * @throws ProcessorLibraryNotFoundException
     */
    public function createInstance($processor);
}
