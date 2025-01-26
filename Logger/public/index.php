<?php

use Muthukumaranm\Session\Logger\ConsoleLogger;

require_once '../vendor/autoload.php';

$logger = new ConsoleLogger();

// Example usage
$logger->info('This is an info message.');
$logger->error('Error occurred: {error}', ['error' => 'File not found']);
$logger->debug('Debugging context: {context}', ['context' => 'Test variable']);
$logger->critical('Critical issue detected in the system!');

echo 'Hello, world!';
