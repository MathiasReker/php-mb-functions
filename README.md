<h1 align="center">PHP Multibyte String Extension</h1>

[![Packagist Version](https://img.shields.io/packagist/v/MathiasReker/php-mbstring-extension.svg)](https://packagist.org/packages/MathiasReker/php-mbstring-extension)
[![Packagist Downloads](https://img.shields.io/packagist/dt/MathiasReker/php-mbstring-extension.svg?color=%23ff007f)](https://packagist.org/packages/MathiasReker/php-mbstring-extension)
[![CI status](https://github.com/MathiasReker/php-mbstring-extension/actions/workflows/ci.yml/badge.svg?branch=develop)](https://github.com/MathiasReker/php-mbstring-extension/actions/workflows/ci.yml)
[![Contributors](https://img.shields.io/github/contributors/MathiasReker/php-mbstring-extension.svg)](https://github.com/MathiasReker/php-mbstring-extension/graphs/contributors)
[![Forks](https://img.shields.io/github/forks/MathiasReker/php-mbstring-extension.svg)](https://github.com/MathiasReker/php-mbstring-extension/network/members)
[![Stargazers](https://img.shields.io/github/stars/MathiasReker/php-mbstring-extension.svg)](https://github.com/MathiasReker/php-mbstring-extension/stargazers)
[![Issues](https://img.shields.io/github/issues/MathiasReker/php-mbstring-extension.svg)](https://github.com/MathiasReker/php-mbstring-extension/issues)
[![MIT License](https://img.shields.io/github/license/MathiasReker/php-mbstring-extension.svg)](https://github.com/MathiasReker/php-mbstring-extension/blob/develop/LICENSE.txt)

The `php-mbstring-extension` is a PHP library that provides support
for [multibyte strings](https://www.php.net/manual/en/ref.mbstring.php) that are not covered by the standard PHP string
functions.

### Versions & Dependencies

| Version | PHP  | Documentation |
|---------|------|---------------|
| ^2.0    | ^8.0 | current       |

### Requirements

- `PHP` >= 8.0
- php-extension `ext-mbstring`

### Installation

To acquire the package, utilize the composer package manager.

```bash
composer require mathiasreker/php-mbstring-extension
```

### Documentation

## ✅ levenshtein

Calculate the Levenshtein distance between two strings.

```php
\MathiasReker\PhpMbFunctions\Mbstring::levenshtein(
    string $s1,
    string $s2,
    int $cost_ins = 1,
    int $cost_rep = 1,
    int $cost_del = 1
): int

```

## ✅ ucwords

Uppercase the first character of each word in a string.

```php
\MathiasReker\PhpMbFunctions\Mbstring::ucwords(
    string $string,
    string $encoding = 'UTF-8'
): string
```

## ✅ ucfirst

Make the first character of a string uppercase.

```php
\MathiasReker\PhpMbFunctions\Mbstring::ucfirst(
    string $string,
    string $encoding = 'UTF-8'
): string
```

## ✅ strrev

Reverse a string.

```php
\MathiasReker\PhpMbFunctions\Mbstring::strrev(
    string $string,
    string $encoding = 'UTF-8'
): string

```

## ✅ count_chars

Returns information about characters used in a string.

```php
\MathiasReker\PhpMbFunctions\Mbstring::count_chars(
    string $string,
    int $mode,
    string $encoding = 'UTF-8'
): array|string
```

## ✅ trim

Multibyte-aware trim function.

```php
\MathiasReker\PhpMbFunctions\Mbstring::trim(
    string $str,
    string $charlist = " \t\n\r\0\x0B"
): string
```

### Roadmap

See the [open issues](https://github.com/MathiasReker/php-mbstring-extension/issues) for a complete list of proposed
features (and known issues).

### Contributing

If you have a suggestion to enhance this project, kindly fork the repository and create a pull request. Alternatively,
you may open an issue and tag it as "enhancement". Lastly, do not hesitate to give the project a star ⭐. Thank you for
your support.

#### Docker

If you are utilizing Docker, the following command can be used to initiate the process:

```bash
docker-compose up -d
```

Next, access the container:

```bash
docker exec -it php-mbstring-extension bash
```

#### Tools

PHP Coding Standards Fixer:

```bash
composer cs-fix
```

PHP Coding Standards Checker:

```bash
composer cs-check
```

Rector Fixer:

```bash
composer rector-fix
```

Rector Checker:

```bash
composer rector-check
```

PHP Stan:

```bash
composer phpstan
```

Unit tests:

```bash
composer test
```

### License

The distribution of the package operates under the `MIT License`. Further information can be found in the LICENSE file.
