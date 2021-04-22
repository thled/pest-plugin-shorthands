# Pest Plugin: Shorthands

This repository contains the Pest Plugin *Shorthands*.

> If you want to start testing your application with Pest, visit the main **[Pest Repository](https://github.com/pestphp/pest)**.

- Explore the docs: **[pestphp.com/docs/plugins/creating-plugins »](https://pestphp.com/docs/plugins/creating-plugins)**

## Usage

Just add an `x` prefix on the test function to skip the test. I.e.

```php
xit('has home', function () {
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
