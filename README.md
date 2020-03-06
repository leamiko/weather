<h1 align="center"> weather </h1>

<p align="center"> a weather sdk.</p>

[![Build Status](https://travis-ci.org/leamiko/weather.svg?branch=master)](https://travis-ci.org/leamiko/weather)


## Installing

```shell
$ composer require leamiko/weather -vvv
```

## Usage

单元测试
```
./vendor/bin/phpunit  --filter testGetWeatherWithInvalid
```

```
composer require phpunit/phpunit 7.5

composer require --dev phpunit/phpunit^6.2

composer require --dev mockery/mockery:^1.3
```

```
composer remove phpunit/phpunit
composer require --dev phpunit/phpunit:~5
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/leamiko/weather/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/leamiko/weather/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT