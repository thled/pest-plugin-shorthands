# Pest Plugin: Shorthands

This repository contains the Pest Plugin *Shorthands*.

> If you want to start testing your application with Pest, visit the main **[Pest Repository](https://github.com/pestphp/pest)**.

## Overview

The Shorthands Plugin for Pest provides additional functions for skipping and focusing tests.
These additional functions are just like the test functions but with a single letter prefix for quick usage.

## Installation

Install the plugin using Composer:

```shell
$ composer require thled/pest-plugin-shorthands --dev
```

## Usage

Just add an `x` prefix on the test function to skip the test. I.e.

```php
use function Thled\Shorthands\xit;

xit('should be skipped', function () {
// ...
});
```

Shorthands for skipping:

- `xit()`
- `xtest()`

Same goes for running one test only by prefixing it with `f`.

Shorthands for focusing:

- `fit()`
- `ftest()`

## Credit

Pest was created by **[Nuno Maduro](https://twitter.com/enunomaduro)**
under the **[Sponsorware license](https://github.com/sponsorware/docs)**.
It got open-sourced and is now licensed under the **[MIT license](https://opensource.org/licenses/MIT)**.
