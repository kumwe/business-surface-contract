<?php

declare(strict_types=1);

namespace Kumwe\BusinessSurface\Contract\Tests;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;

abstract class TestCase extends PHPUnitTestCase
{
    protected function assertThrows(callable $operation, string $exceptionClass, string $message): \Throwable
    {
        try {
            $operation();
        } catch (\Throwable $error) {
            self::assertInstanceOf($exceptionClass, $error, $message);
            return $error;
        }
        self::fail($message);
    }

    protected function assertStringContains(string $needle, string $haystack, string $message): void
    {
        self::assertStringContainsString($needle, $haystack, $message);
    }
}
