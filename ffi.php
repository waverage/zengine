<?php
include __DIR__ . '/vendor/autoload.php';

use ZEngine\Core;

Core::init();

$pageSize = Core::call('getpagesize');