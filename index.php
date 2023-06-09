<?php
// Uncomment to disable error reporting
ini_set('display_errors', 1);
error_reporting(E_ERROR);

// Uncomment if you downloaded Plugi
require_once __DIR__ . '/plugi/src/Core/helpers.php';
spl_autoload_register('phpb_autoload');

$config = require __DIR__ . '/config.php';

$builder = new Plugi\Plugi($config);
$builder->handleRequest();
