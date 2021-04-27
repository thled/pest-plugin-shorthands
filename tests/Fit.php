<?php

declare(strict_types=1);

use function Thled\Shorthands\fit;

fit('focus with "fit" shorthand')
    ->assertTrue(true);

it('should not be run')
    ->assertTrue(false);
