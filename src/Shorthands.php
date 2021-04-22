<?php

declare(strict_types=1);

namespace Thled\Shorthands;

use PHPUnit\Framework\TestCase;

/** @return TestCase */
function example(string $argument): TestCase
{
    return test()->example(...func_get_args());
}
