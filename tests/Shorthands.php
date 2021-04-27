<?php

declare(strict_types=1);

it('has shorthand "xit" to skip test')
    ->assertTrue(function_exists('xit'));

it('has shorthand "xtest" to skip test')
    ->assertTrue(function_exists('xtest'));

it('has shorthand "fit" to focus test')
    ->assertTrue(function_exists('fit'));

it('has shorthand "ftest" to focus test')
    ->assertTrue(function_exists('ftest'));
