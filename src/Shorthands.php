<?php

declare(strict_types=1);

use Pest\PendingObjects\TestCall;

function xit(string $description, Closure $closure = null): TestCall
{
    return it($description, $closure)->skip();
}

function xtest(string $description, Closure $closure = null): TestCall
{
    return test($description, $closure)->skip();
}

function fit(string $description, Closure $closure = null): TestCall
{
    return it($description, $closure)->only();
}

function ftest(string $description, Closure $closure = null): TestCall
{
    return test($description, $closure)->only();
}
