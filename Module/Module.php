<?php

namespace Liloi\Rune\Dump;

use Liloi\API\Manager;
use Liloi\API\Method;
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
    public static function bind(Manager $manager, Pool $config): void
    {
        $manager->add(new Method('Rune.Dump.Dump', '\Liloi\Rune\Dump\API\Dump::execute'));
    }
}