<?php

namespace Drewlabs\Txn;

interface UIAwareProcessorInterface
{
    /**
     * Returns the UI configuration value of the processor
     *
     * @return object|array
     */
    public function getUIConfig();
}
