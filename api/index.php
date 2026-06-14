<?php

$_SERVER['HTTP_ACCEPT'] = $_SERVER['HTTP_ACCEPT'] ?? 'application/json';

$_ENV['APP_BASE_PATH'] = dirname(__DIR__);
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/views';
putenv('VIEW_COMPILED_PATH=/tmp/views');

if (! is_dir('/tmp/views')) {
    mkdir('/tmp/views', 0755, true);
}

chdir(__DIR__ . '/..');

require __DIR__ . '/../public/index.php';
