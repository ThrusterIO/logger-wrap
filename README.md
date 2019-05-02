# LoggerWrap

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Thruster LoggerWrap Component wraps LoggerInterface and provides LoggerInterface with optional logging


## Install

Via Composer

```bash
$ composer require thruster/logger-wrap
```

## Usage

Simple wrap your LoggerInterface object or not to enable/disable logging without bunch of if conditions around.

```php
$logger = new Logger();
$wrappedLogger = new LoggerWrap($logger);

$wrappedLogger->info('Foo Bar'); // Will call $logger->info('Foo Bar');
```
Or not pass logger to disable logging

```php
$wrappedLogger = new LoggerWrap();

$wrappedLogger->info('Foo Bar'); // Will not call anything
```

## Testing

Run test cases

```bash
$ composer test
```

Run test cases with coverage (HTML format)


```bash
$ composer test-coverage
```

Run PHP style checker

```bash
$ composer check-style
```

Run PHP style fixer

```bash
$ composer fix-style
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.


## License

Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/ThrusterIO/logger-wrap.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ThrusterIO/logger-wrap/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ThrusterIO/logger-wrap.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ThrusterIO/logger-wrap.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/thruster/logger-wrap.svg?style=flat-square
[ico-email]: https://img.shields.io/badge/email-team@thruster.io-blue.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/thruster/logger-wrap
[link-travis]: https://travis-ci.org/ThrusterIO/logger-wrap
[link-scrutinizer]: https://scrutinizer-ci.com/g/ThrusterIO/logger-wrap/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/ThrusterIO/logger-wrap
[link-downloads]: https://packagist.org/packages/thruster/logger-wrap
[link-email]: mailto:team@thruster.io
