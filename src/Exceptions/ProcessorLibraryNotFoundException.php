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

namespace Drewlabs\Txn\Exceptions;

class ProcessorLibraryNotFoundException extends \Exception
{
    /**
     * Creates a {@see ProcessorLibraryNotFoundException} instance.
     */
    public function __construct(string $library)
    {
        $message = "Missing library $library";
        parent::__construct($message, 404);
    }
}
