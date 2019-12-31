<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-configuration for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-configuration/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-configuration/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\ApiTools\Configuration\TestAsset;

use PHPUnit_Framework_TestCase as TestCase;
use Laminas\Config\Writer\PhpArray as BaseWriter;

class ConfigWriter extends BaseWriter
{
    public $writtenConfig;

    public function toFile($filename, $config, $exclusiveLock = true)
    {
        $this->writtenConfig = $config;
    }
}