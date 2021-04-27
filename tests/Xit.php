<?php

declare(strict_types=1);

xit('skips with "xit" shorthand', function () {
    expect(false)->toBeTrue();
});

xit('skips a pending test');

xit('skips a higher order test')
    ->assertTrue(false);
