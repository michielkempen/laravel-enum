# Laravel Enum

A strongly typed enum class for PHP that supports autocompletion and refactoring.

## Installation

Add the package to the dependencies of your application

```
composer require michielkempen/laravel-enum
```

## Usage

```php
<?php

use MichielKempen\LaravelEnum\Enum;

class ExampleEnum extends Enum
{
    const TYPE_A = 'a';
    const TYPE_B = 'b';
    const TYPE_C = 'c';
}
```

```php
<?php

ExampleEnum::TYPE_A; // outputs 'a'

ExampleEnum::TYPE_B; // outputs 'b'

ExampleEnum::all(); // outputs ['a', 'b', 'c']
```

## Security

If you discover any security related issues, please email kempenmichiel@gmail.com instead of using the issue tracker.

## Credits

- [Michiel Kempen](https://github.com/michielkempen)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
