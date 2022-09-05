<?php

namespace Splynx\Zengine;

use ZEngine\EngineExtension\AbstractModule;

class CounterModule extends AbstractModule
{
    public static function targetThreadSafe(): bool
    {
        return ZEND_THREAD_SAFE;
    }

    public static function targetDebug(): bool
    {
        return ZEND_DEBUG_BUILD;
    }

    public static function targetApiVersion(): int
    {
        return 20190902;
    }

    public static function targetPersistent(): bool
    {
        return true;
    }

    public static function globalType(): ?string
    {
        return 'unsigned int[10]';
    }
}
