<?php

declare(strict_types=1);

use function Thled\Shorthands\xit;
use function Thled\Shorthands\xtest;

it('has shorthand "xit" to skip test')
    ->assertTrue(function_exists('Thled\Shorthands\xit'));

xit('skips with "xit" shorthand')
    ->assertTrue(false);

it('has shorthand "xtest" to skip test')
    ->assertTrue(function_exists('Thled\Shorthands\xtest'));

xtest('skips with "xtest" shorthand')
    ->assertTrue(false);
