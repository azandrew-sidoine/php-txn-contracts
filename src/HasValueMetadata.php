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

interface HasValueMetadata
{

    /**
     * return the actual value of the object. 
     * 
     * **Note** Usually in case of payment requests, it is a currency based amount of the payment.
     *
     * @return string|int
     */
    public function getValue();
}
