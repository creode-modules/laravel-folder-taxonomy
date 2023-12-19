# Creates a new folder taxonomy for Laravel projects.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/creode/laravel-folder-taxonomy.svg?style=flat-square)](https://packagist.org/packages/creode/laravel-folder-taxonomy)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/creode-modules/laravel-folder-taxonomy/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/creode-modules/laravel-folder-taxonomy/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/creode-modules/laravel-folder-taxonomy/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/creode-modules/laravel-folder-taxonomy/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/creode/laravel-folder-taxonomy.svg?style=flat-square)](https://packagist.org/packages/creode/laravel-folder-taxonomy)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require creode/laravel-folder-taxonomy
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-folder-taxonomy-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-folder-taxonomy-config"
```

This is the contents of the published config file:

```php
return [
    'folder_model' => \Creode\LaravelFolderTaxonomy\Models\Folder::class,
];
```

## Usage

The idea behind this module is to be able to publish the configuration and override the folder model with an extends class. This will allow you to add functionality onto the folder model.

```php
namespace App\Models;

use Creode\LaravelFolderTaxonomy\Models\Folder as BaseFolder;

class Folder extends BaseFolder
{
    // Add your custom functionality here
}
```

The folder model configuration can be overridden in the config file.

```php
return [
    'folder_model' => \App\Models\Folder::class,
];
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Creode](https://github.com/creode-modules)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
