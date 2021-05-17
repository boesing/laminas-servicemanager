<?php

declare(strict_types=1);

namespace LaminasTest\ServiceManager;

use Laminas\ServiceManager\ServiceManager;
use Laminas\ServiceManager\Test\CommonPluginManagerTrait;
use LaminasTest\ServiceManager\TestAsset\InvokableObject;
use LaminasTest\ServiceManager\TestAsset\V2v3PluginManager;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * Example test of using CommonPluginManagerTrait
 */
class ExamplePluginManagerTest extends TestCase
{
    use CommonPluginManagerTrait;

    protected function getPluginManager(): V2v3PluginManager
    {
        return new V2v3PluginManager(new ServiceManager());
    }

    protected function getV2InvalidPluginException(): string
    {
        return RuntimeException::class;
    }

    protected function getInstanceOf(): string
    {
        return InvokableObject::class;
    }
}
