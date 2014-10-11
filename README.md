# Component\Util\Singleton

**Component\Util\Singleton** is a simple-to-use [PHP][1] component that provides
the *Singleton* (and *Registry of Singletons* a.k.a. *Multiton*) creational
design pattern.

[![Build Status](https://travis-ci.org/FlorianWolters/PHP-Component-Util-Singleton.svg?branch=master)](https://travis-ci.org/FlorianWolters/PHP-Component-Util-Singleton)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Util-Singleton/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Util-Singleton/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Util-Singleton/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Util-Singleton/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/edc62383-bf27-4e3e-bd39-37c65ccbf329/mini.png)](https://insight.sensiolabs.com/projects/edc62383-bf27-4e3e-bd39-37c65ccbf329)
[![Coverage Status](https://img.shields.io/coveralls/FlorianWolters/PHP-Component-Util-Singleton.svg)](https://coveralls.io/r/FlorianWolters/PHP-Component-Util-Singleton?branch=master)

[![Latest Stable Version](https://poser.pugx.org/florianwolters/component-util-singleton/v/stable.png)](https://packagist.org/packages/florianwolters/component-util-singleton)
[![Total Downloads](https://poser.pugx.org/florianwolters/component-util-singleton/downloads.png)](https://packagist.org/packages/florianwolters/component-util-singleton)
[![Monthly Downloads](https://poser.pugx.org/florianwolters/component-util-singleton/d/monthly.png)](https://packagist.org/packages/florianwolters/component-util-singleton)
[![Daily Downloads](https://poser.pugx.org/florianwolters/component-util-singleton/d/daily.png)](https://packagist.org/packages/florianwolters/component-util-singleton)
[![Latest Unstable Version](https://poser.pugx.org/florianwolters/component-util-singleton/v/unstable.png)](https://packagist.org/packages/florianwolters/component-util-singleton)
[![License](https://poser.pugx.org/florianwolters/component-util-singleton/license.png)](https://packagist.org/packages/florianwolters/component-util-singleton)

[![Stories in Ready](https://badge.waffle.io/florianwolters/php-component-util-singleton.png?label=ready&title=Ready)](https://waffle.io/florianwolters/php-component-util-singleton)
[![Dependency Status](https://www.versioneye.com/user/projects/51c330f85862c4000200053e/badge.svg)](https://www.versioneye.com/user/projects/51c330f85862c4000200053e)
[![Dependencies Status](https://depending.in/FlorianWolters/PHP-Component-Util-Singleton.png)](http://depending.in/FlorianWolters/PHP-Component-Util-Singleton)
[![HHVM Status](http://hhvm.h4cc.de/badge/florianwolters/component-util-singleton.png)](http://hhvm.h4cc.de/package/florianwolters/component-util-singleton)

## Table of Contents (ToC)

* [Introduction](#introduction)
* [Features](#features)
* [Requirements](#requirements)
* [Usage](#usage)
* [Installation](#installation)
* [Testing](#testing)
* [Contributing](#contributing)
* [Credits](#credits)
* [License](#license)

## Introduction

*Singleton* is a *creational* design pattern and defined as follows:

> "Ensure a class only has once instance, and provide a global access point to
> it."

-- E. Gamma, et al. Design Patterns: Elements of Reusable Object-Oriented
software. Westford: Addison-Wesley, 1995.

**Component\Util\Singleton** contains of two traits:

* The trait [`SingletonTrait`][53]: A generic implementation of the *Singleton*
  creational design pattern.
* The trait [`MultitonTrait`][54]: A generic implementation of the *Registry of
  Singletons* a.k.a. *Multiton* creational design pattern.

The generic implementations as traits make this component **reusable** (see the
section [Features](#features) below).

## Features

* Allows to pass parameters to the static *Creation Method* `getInstance()`. The
  parameters are passed to the `protected` constructor of the class using the
  component.
* Allows a number of unlimited classes to use the component.
    * A class which uses the [`SingletonTrait`][53] (or [`MultitonTrait`][54])
      can still inherit from another class.
    * A class which extends a class using the [`SingletonTrait`][53] (or
     [`MultitonTrait`][54]) is a **new** *Singleton* (or *Multiton*). Therefore
     the component supports inheritance.
* Disallows cloning and serializing of a *Singleton* (or *Multiton*) instance.
* Disallows overriding of the methods `getInstance()`, `__clone` and `__wakeup`.
* Follows the naming conventions for the *Singleton* design pattern (offers a
  static *Creation Method* `getInstance()`).
* Artifacts tested with both static and dynamic test procedures:
    * Dynamic component tests (unit and integration tests) implemented with
      [PHPUnit][41].
    * Static code analysis performed using the following tools:
        * [PHP_CodeSniffer][40]: Style Checker
        * [PHP Mess Detector (PHPMD)][44]: Code Analyzer
        * [PHP Depend][45]: Code Metrics
        * [phpcpd][42]: Copy/Paste Detector (CPD)
        * [phpdcd][43]: Dead Code Detector (DCD)
        * [SensioLabs Security Checker][47]: Security Checker
    * Continuous Integration (CI) using the following web services:
        * [Scrutinizer CI][21]
        * [SensioLabsInsight][22]
        * [Coveralls][23]
        * [VersionEye][24]
        * [Depending][25]
        * [Waffle][26]
* Provides a [Packagist][3] package which can be installed using the dependency
  manager [Composer][2]. Click [here][51] for the package on [Packagist][3].
* Provides a complete Application Programming Interface (API) documentation
  generated with the documentation generator [Sami][46]. Click
  [here][52] for the API documentation.
* Follows the following "standards" from the [PHP Framework Interoperability
  Group (FIG)][10]. PSR stands for PHP Standards Recommendation:
    * [PSR-0][11]: Autoloading Standards

        > Aims to provide a standard file, class and namespace convention to
        > allow plug-and-play code.
    * [PSR-1][12]: Basic Coding Standard

        > Aims to ensure a high level of technical interoperability between
        > shared PHP code.
    * [PSR-2][13]: Coding Style Guide

        > Provides a Coding Style Guide for projects looking to standardize
        > their code.
    * [PSR-4][14]: Autoloader

        > A more modern take on autoloading reflecting advances in the
        > ecosystem.
* Follows the [Semantic Versioning][4] (SemVer) specification version 2.0.0.

## Requirements

### Production

* [PHP][1] >= 5.4
* [Composer][2]
* [florianwolters/component-util-reflection][56]
* [florianwolters/component-core-stringutils][57]

### Development

* [PHPUnit][41]
* [phpcpd][42]
* [phpdcd][43]
* [PHP_CodeSniffer][40]
* [PHP Mess Detector (PHPMD)][44]
* [Sami][46]
* [SensioLabs Security Checker][47]
* [php-coveralls][48]

## Installation

**Component\Util\Singleton** should be installed using the dependency manager
[Composer][2].

> [Composer][2] is a tool for dependency management in [PHP][1]. It allows you
> to declare the dependent libraries your project needs and it will install them
> in your project for you.

The [Composer][2] installer can be downloaded with `php`.

    php -r "readfile('https://getcomposer.org/installer');" | php

> This will just check a few [PHP][1] settings and then download `composer.phar`
> to your working directory. This file is the [Composer][2] binary. It is a PHAR
> ([PHP][1] archive), which is an archive format for [PHP][1] which can be run
> on the command line, amongst other things.

> To resolve and download dependencies, run the `install` command:

    php composer.phar install

If you are creating a component that relies on **Component\Util\Singleton**,
please make sure that you add **Component\Util\Singleton** to your component's
`composer.json` file:

```json
{
    "require": {
        "florianwolters/component-util-singleton": "0.3.*"
    }
}
```

## Usage

The best documentation for **Component\Util\Singleton** are the unit tests,
which are shipped in the package.

Additional documentation can be found in the [official Wiki][55] of the project.

## Testing

    phpunit

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

* [Florian Wolters][9]
* [All Contributors][50]

## License

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU Lesser General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along
with this program. If not, see <https://gnu.org/licenses/lgpl.txt>.

[1]: https://php.net
     "PHP: Hypertext Preprocessor"
[2]: https://getcomposer.org
     "Composer"
[3]: https://packagist.org
     "Packagist"
[4]: http://semver.org
     "Semantic Versioning"
[9]: https://github.com/FlorianWolters
     "FlorianWolters · GitHub"
[10]: http://php-fig.org
      "PHP-FIG — PHP Framework Interop Group"
[11]: http://php-fig.org/psr/psr-0
      "PSR-0 requirements for autoloader interoperability"
[12]: http://php-fig.org/psr/psr-1
      "PSR-1 basic coding style guide"
[13]: http://php-fig.org/psr/psr-2
      "PSR-2 coding style guide"
[14]: http://php-fig.org/psr/psr-4
      "PSR-4: Improved Autoloading"
[20]: https://travis-ci.org
      "Travis CI"
[21]: https://scrutinizer-ci.com
      "Scrutinizer CI"
[22]: https://insight.sensiolabs.com
      "SensioLabsInsight"
[23]: https://coveralls.io
      "Coveralls"
[24]: https://versioneye.com
      "VersionEye"
[25]: https://depending.in
      "Depending"
[26]: https://waffle.io
      "Waffle"
[27]: http://hhvm.h4cc.de
      "HHVM Support in PHP Projects"
[40]: https://pear.php.net/package/PHP_CodeSniffer
      "PHP_CodeSniffer"
[41]: https://phpunit.de
      "PHPUnit"
[42]: https://github.com/sebastianbergmann/phpcpd
      "sebastianbergmann/phpcpd · GitHub"
[43]: https://github.com/sebastianbergmann/phpdcd
      "sebastianbergmann/phpdcd · GitHub"
[44]: http://phpmd.org
      "PHPMD - PHP Mess Detector"
[45]: http://pdepend.org
      "PHP Depend - Software Metrics for PHP"
[46]: https://github.com/fabpot/sami
      "fabpot/sami · GitHub"
[47]: https://github.com/sensiolabs/security-checker
      "SensioLabs Security Checker"
[48]: https://github.com/satooshi/php-coveralls
      "satooshi/php-coveralls · GitHub"
[50]: https://github.com/FlorianWolters/PHP-Component-Util-Singleton/contributors
      "Contributors to FlorianWolters/PHP-Component-Util-Singleton"
[51]: https://packagist.org/packages/florianwolters/component-util-singleton
      "florianwolters/component-util-singleton - Packagist"
[52]: http://blog.florianwolters.de/PHP-Component-Util-Singleton
      "Application Programming Interface (API) documentation"
[53]: src/php/FlorianWolters/Component/Util/Singleton/SingletonTrait.php
      "FlorianWolters\Component\Util\Singleton\SingletonTrait"
[54]: src/php/FlorianWolters/Component/Util/Singleton/MultitonTrait.php
      "FlorianWolters\Component\Util\Singleton\MultitonTrait"
[55]: /wiki
      "FlorianWolters/PHP-Component-Util-Singleton Wiki"
[56]: https://github.com/FlorianWolters/PHP-Component-Util-Reflection
      "FlorianWolters/PHP-Component-Util-Reflection"
[57]: https://github.com/FlorianWolters/PHP-Component-Core-StringUtils
      "FlorianWolters/PHP-Component-Core-StringUtils"
