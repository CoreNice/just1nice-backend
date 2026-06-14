<?php

$_SERVER['HTTP_ACCEPT'] = $_SERVER['HTTP_ACCEPT'] ?? 'application/json';

$_ENV['APP_BASE_PATH'] = dirname(__DIR__);

if (! is_dir('/tmp/views')) {
    mkdir('/tmp/views', 0755, true);
}

if (! str_contains($_SERVER['HTTP_ACCEPT'], 'application/json')) {
    $_SERVER['HTTP_ACCEPT'] = 'application/json';
}

chdir(__DIR__.'/..');

require __DIR__.'/../public/index.php';
