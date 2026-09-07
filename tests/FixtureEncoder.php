<?php

declare(strict_types=1);

namespace Kumwe\BusinessSurface\Contract\Tests;

use Kumwe\CanonicalJson\CanonicalEncoder;

/** Test-only byte-length stand-in; never shipped as a canonical implementation. */
final class FixtureEncoder implements CanonicalEncoder
{
    public function encode(mixed $value): string
    {
        try {
            return json_encode($value, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_THROW_ON_ERROR);
        } catch (\JsonException $error) {
            throw new \InvalidArgumentException('Unencodable test value.', 0, $error);
        }
    }

    public function digest(mixed $value): string
    {
        return hash('sha256', $this->encode($value));
    }
}
