<?php

declare(strict_types=1);

use function Thled\Shorthands\xit;

it('has shorthand to skip test')
    ->assertTrue(function_exists('Thled\Shorthands\xit'));

xit('skips with shorthand')
    ->assertTrue(false);
