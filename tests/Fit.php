<?php

declare(strict_types=1);

use function Thled\Shorthands\fit;

fit('focus with "fit" shorthand', function () {
    expect(true)->toBeTrue();
});

fit('focus a pending test');

fit('focus a higher order test')
    ->assertTrue(true);

it('should not be run')
    ->assertTrue(false);
