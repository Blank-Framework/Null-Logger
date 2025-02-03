<?php

namespace BlankFramework\NullLogger;

use Psr\Log\LoggerInterface;
use Stringable;

class NullLogger implements LoggerInterface
{
    public function emergency(string|Stringable $message, array $context = []): void
    {
        // Nothing to see
    }

    public function alert(string|Stringable $message, array $context = []): void
    {
        // Nothing to see
    }

    public function critical(string|Stringable $message, array $context = []): void
    {
        // Nothing to see
    }

    public function error(string|Stringable $message, array $context = []): void
    {
        // Nothing to see
    }

    public function warning(string|Stringable $message, array $context = []): void
    {
        // Nothing to see
    }

    public function notice(string|Stringable $message, array $context = []): void
    {
        // Nothing to see
    }

    public function info(string|Stringable $message, array $context = []): void
    {
        // Nothing to see
    }

    public function debug(string|Stringable $message, array $context = []): void
    {
        // Nothing to see
    }

    public function log($level, string|Stringable $message, array $context = []): void
    {
        // Nothing to see
    }
}
