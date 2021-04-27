<?php

declare(strict_types=1);

xtest('test skips with "xtest" shorthand', function () {
    expect(false)->toBeTrue();
});

xtest('test skips a pending test');

xtest('test skips a higher order test')
    ->assertTrue(false);
