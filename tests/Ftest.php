<?php

declare(strict_types=1);

ftest('test focus with "ftest" shorthand', function () {
    expect(true)->toBeTrue();
});

ftest('test focus a pending test');

ftest('test focus a higher order test')
    ->assertTrue(true);

it('should not be run')
    ->assertTrue(false);
