<?php

include __DIR__ . '/vendor/autoload.php';

use ZEngine\Core;

Core::init();

$module = new \Splynx\Zengine\CounterModule();
if (!$module->isModuleRegistered()) {
    $module->register();
    $module->startup();
}

$data = $module->getGlobals();
$index = random_int(0, 9); // If you have several workers, you should use worker pid to avoid race conditions
$data[$index] = 3;

file_put_contents('/var/log/file.log', "\ndata: " . var_export($data, 1), FILE_APPEND);