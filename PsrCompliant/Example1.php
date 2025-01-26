<?php
namespace Org\Module\PsrCompliant;

class Example1 {
    const MY_CONSTANT = 'value';
    private $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function myMethod() {
        $this->logger->info('myMethod was called');
        // ...code...
    }
}
