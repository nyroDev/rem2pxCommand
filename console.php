#!/usr/bin/env php
<?php

if (PHP_SAPI != 'cli') {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

set_time_limit(0);
ini_set('memory_limit', '-1');

require(__DIR__.'/vendor/autoload.php');
require(__DIR__.'/Command/rem2pxCommand.php');

$application = new \Symfony\Component\Console\Application();

$exportCommand = new \NyroDev\Rem2px\Command\rem2pxCommand();
$application->add($exportCommand);

$application->run();
