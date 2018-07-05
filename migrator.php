#!/usr/bin/env php
<?php

use Symfony\Component\Console\Application;

require_once __DIR__.'/vendor/autoload.php';

$app = new Application('PHP 7 Migration Tool','1.0.0-alpha');

$exitCode = $app->run();
exit($exitCode);