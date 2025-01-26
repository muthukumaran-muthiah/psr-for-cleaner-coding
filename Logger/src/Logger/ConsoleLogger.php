<?php

declare(strict_types=1);

namespace Muthukumaranm\Session\Logger;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Psr\Log\InvalidArgumentException;

class ConsoleLogger implements LoggerInterface
{
    public function emergency($message, array $context = []): void
    {
        $this->log(LogLevel::EMERGENCY, $message, $context);
    }

    public function alert($message, array $context = []): void
    {
        $this->log(LogLevel::ALERT, $message, $context);
    }

    public function critical($message, array $context = []): void
    {
        $this->log(LogLevel::CRITICAL, $message, $context);
    }

    public function error($message, array $context = []): void
    {
        $this->log(LogLevel::ERROR, $message, $context);
    }

    public function warning($message, array $context = []): void
    {
        $this->log(LogLevel::WARNING, $message, $context);
    }

    public function notice($message, array $context = []): void
    {
        $this->log(LogLevel::NOTICE, $message, $context);
    }

    public function info($message, array $context = []): void
    {
        $this->log(LogLevel::INFO, $message, $context);
    }

    public function debug($message, array $context = []): void
    {
        $this->log(LogLevel::DEBUG, $message, $context);
    }

    public function log($level, $message, array $context = []): void
    {
        // Validate log level
        if (!in_array($level, array_keys($this->getLogLevels()), true)) {
            throw new InvalidArgumentException("Invalid log level: {$level}");
        }

        // Interpolate context into the message
        $message = $this->interpolate($message, $context);

        // Format and display the log
        $date = (new \DateTime())->format('Y-m-d H:i:s');
        fwrite(fopen('php://stdout', 'w'), "[{$date}] {$level}: {$message}" . PHP_EOL);
    }

    private function interpolate(string $message, array $context): string
    {
        foreach ($context as $key => $value) {
            $placeholder = "{" . $key . "}";
            if (is_scalar($value)) {
                $message = str_replace($placeholder, (string)$value, $message);
            } elseif (is_object($value) && method_exists($value, '__toString')) {
                $message = str_replace($placeholder, (string)$value, $message);
            }
        }

        return $message;
    }

    private function getLogLevels(): array
    {
        return [
            LogLevel::EMERGENCY => 'emergency',
            LogLevel::ALERT => 'alert',
            LogLevel::CRITICAL => 'critical',
            LogLevel::ERROR => 'error',
            LogLevel::WARNING => 'warning',
            LogLevel::NOTICE => 'notice',
            LogLevel::INFO => 'info',
            LogLevel::DEBUG => 'debug',
        ];
    }
}
