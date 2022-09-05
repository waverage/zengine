<?php

include __DIR__ . '/vendor/autoload.php';

use ZEngine\Core;

Core::init();

$methodName = 'internalMethod';
$code =
    'b8 01 00 00 00' .
    'bf 01 00 00 00' .
    '48 8d 35 0b 00 00 00' .
    'ba 0e 00 00 00' .
    '0f 05' .
    'c3' .
    '00 00 00' .
    '48 65 6c 6c 6f 2c' .
    '20 57 6f 72 6c 64 21 0a';

$code = preg_replace('/\s+/', '', $code);
$code = hex2bin($code);

class TestClass {}

$refClass = new \ZEngine\Reflection\ReflectionClass(TestClass::class);
$refClass->addInternalMethod($methodName, $code);

$instance = new TestClass();
$instance->internalMethod();