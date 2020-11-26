# Blade Css Icons

<a href="https://github.com/khatabwedaa/blade-css-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/khatabwedaa/blade-css-icons/workflows/Tests/badge.svg" alt="Tests">
</a>

<a href="https://packagist.org/packages/khatabwedaa/blade-css-icons">
    <img src="https://poser.pugx.org/khatabwedaa/blade-css-icons/d/total.svg" alt="Total Downloads">
</a>

A package to easily make use of [Css.gg Icons](https://github.com/astrit/css.gg) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [css.gg](https://css.gg). Css.gg Icons are originally developed by [Astrit Malsija](https://twitter.com/AstritMalsija).

## Requirements

- PHP 7.3 or higher
- Laravel 7.14 or higher

## Installation

```bash
composer require khatabwedaa/blade-css-icons
```

## Usage

Icons can be used a self-closing Blade components which will be compiled to SVG icons:

```blade
<x-css-abstract/>
```

You can also pass classes to your icon components:

```blade
<x-css-abstract class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-css-abstract style="color: #555"/>
```

The solid icons can be referenced like this:

```blade
<x-css-abstract/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-css-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-css-icons/abstract.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade Css Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Css Icons is developed and maintained by [Khatab Wedaa](https://twitter.com/khatabwedaa).

Blade Icons is developed and maintained by [Dries Vints](https://driesvints.com).

## License

Blade Css Icons is open-sourced software licensed under [the MIT license](LICENSE.md).
