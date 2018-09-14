# Nova Unique Field

[![Latest Version on Packagist](https://img.shields.io/packagist/v/epartment/nova-unique-ajax-field.svg)](https://packagist.org/packages/epartment/nova-unique-ajax-field)
[![Total Downloads](https://img.shields.io/packagist/dt/epartment/nova-unique-ajax-field.svg)](https://packagist.org/packages/epartment/nova-dependency-container)
[![License](https://img.shields.io/packagist/l/epartment/nova-unique-ajax-field.svg)](https://github.com/epartment/nova-unique-ajax-field/blob/master/LICENSE.md)

### Description
This field validates for uniqueness while typing through an AJAX request, instead of on-save in Nova.

### Demo

![Demo](https://raw.githubusercontent.com/epartment/nova-unique-ajax-field/master/docs/demo.gif)

### Installation
Install through composer: `composer require epartment/nova-unique-ajax-field`

### Usage

Add a new `Unique` field to your Nova Resource:

```php
use Epartment\NovaUniqueField\Unique;

Unique::make('Email')
```

### Options

```php
Unique::make('Email', 'email')
    ->actOn(Unique::KEY_UP)
    ->notUniqueMessage('Not Unique!')
    ->keyUpDelay(500),
```

It is possible to validate on Key Up (with adjustable delay) or Blur.

### License
The MIT License (MIT). Please see [License File](https://github.com/epartment/nova-unique-ajax-field/blob/master/LICENSE.md) for more information.
