<?php

namespace Liloi\RuneDump;

use Liloi\API\Manager;
use Liloi\Config\Pool;

/**
 * Dump module.
 *
 * @package Liloi\RuneDump
 */
class Module
{
    /**
     * Bind this module.
     *
     * Format: Module->bind($manager, $config);`
     */
    public function bind(Manager $manager, Pool $config): void
    {
    }
}