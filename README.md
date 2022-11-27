# array_key_first_last Polyfill

A polyfill to bring the [PHP 7.3 `array_key_first`](https://www.php.net/manual/en/function.array-key-first.php) and [PHP 7.3 `array_key_last`](https://www.php.net/manual/en/function.array-key-last.php) functions to PHP 5.3 and later.

**All PHP 7 versions are now EOL, and to lessen the upgrade gap, this project is now archive on GitHub, and marked as abandoned on Packagist. It will continue to work, but applications that depend this polyfill are strongly recommended to migrate to PHP 8 or later**.

[![Latest Stable Version](https://poser.pugx.org/phpwatch/array_key_first_last-polyfill/v/stable)](https://packagist.org/packages/phpwatch/array_key_first_last-polyfill) [![License](https://poser.pugx.org/phpwatch/array_key_first_last-polyfill/license)](https://github.com/phpwatch/array_key_first_last-polyfill)  [![CI](https://github.com/phpwatch/array_key_first_last-polyfill/workflows/CI/badge.svg)](https://github.com/phpwatch/array_key_first_last-polyfill/actions)

## Synopsis

This library provides a compatible layer to bring `array_key_first` and `array_key_last` functions that come with PHP 7.3. They provide the full functionality, but from user-land PHP code. Note that PHP 7.3's built-in these above functions are fast and memory-friendly because it is written in C language. However, if you have a library that requires these functions, you can use this library to transparently bring that functionality to any PHP version 5.3 or later.

## Prerequisites

 - PHP 5.3 or later.

## Installing

The simplest way would be to install using [composer](https://getcomposer.org).

```bash
composer require phpwatch/array_key_first_last-polyfill
```

If the `array_key_first` and `array_key_last` functions are not available in your system, composer autoloader will seamlessly autoload a file provided by this library to provide the same functionality.

If you cannot use Composer, try convincing whoever made that decision it is not 2012 anymore. If that doesn't work, you can manually load these functions in the `src/` directory.

## Usage

Usage is exactly the same as PHP 7.3 native `array_key_first` and `array_key_last` functions.

Make sure that the file is included. If you use Composer, include its autoload file. If the `array_key_first` and `array_key_last` functions is natively available, this library will not be loaded at all. If you do not use Composer autoloader, you will need to manually `require` the files in the `src` directory.

Here is an example of using `array_key_first` and `array_key_last` functions. The example below should work in any PHP version from 5.3 and later, even the `array_key_first` and `array_key_last` functions is not natively available.

```php
$array = array(1, 2, 3, 4, 5, 6);
$firstKey = array_key_first($array); // 0
$lastKey = array_key_last($array); // 5
```

## Development, tests, and contributing
Contributions are welcome. Please open an issue or send a pull-request. Please make sure to run the tests in both Linux-based platforms and Windows. Windows uses CRLF line endings, which can make tests fail if you hardcode the assertions to expect a specific position within an LF/CR-preferred platform.

Please note that tests and other deveopment dependencies are not included when you download the zip files from Github. This is to keep the library size small. You need to clone the repository or fork it to get the full source.

## Credits

 - [@Ayesh](https://github.com/Ayesh): [Ayesh Karunaratne](https://ayesh.me).
 - [@peter279k](https://github.com/peter279k): [Chun-Sheng, Li](https://peterli.website/).
