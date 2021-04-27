<?php

declare(strict_types=1);

use function Thled\Shorthands\ftest;

ftest('focus with "ftest" shorthand')
    ->assertTrue(true);

it('should not run')
    ->assertTrue(false);
