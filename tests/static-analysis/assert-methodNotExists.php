<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param class-string|object $value
 *
 * @return class-string|object
 */
function consume($value)
{
    Assert::methodNotExists($value, 'foo');

    return $value;
}
