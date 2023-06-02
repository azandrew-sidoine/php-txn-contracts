<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Txn;

use Drewlabs\Txn\Exceptions\ProcessorLibraryNotFoundException;

/**
 * A `Processor Library Factory` provides API for creating a processor client
 * based on the processor configuration values.
 */
interface ProcessorLibraryFactoryInterface
{
    /**
     * Creates a processor Library based on processor instance.
     *
     * @param LibraryAwareProcessorInterface $processor
     *
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     * @throws ProcessorLibraryNotFoundException
     *
     * @return ProcessorLibraryInterface|TransactionalProcessorLibraryInterface
     */
    public function createInstance($processor);
}
