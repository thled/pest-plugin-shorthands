<?php

declare(strict_types=1);

namespace Thled\Shorthands;

use Pest\PendingObjects\TestCall;

function xit(string $description, \Closure $closure = null): TestCall
{
    return it($description, $closure)->skip();
}
