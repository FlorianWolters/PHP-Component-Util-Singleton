# FlorianWolters\Component\Util\Singleton

[![Build Status](https://secure.travis-ci.org/FlorianWolters/PHP-Component-Util-Singleton.png?branch=master)](http://travis-ci.org/FlorianWolters/PHP-Component-Util-Singleton)

**FlorianWolters\Component\Util\Singleton** is a simple-to-use [PHP][17] component that provides the *Singleton* design pattern as an [interface][22], an [abstract class][21] and a [trait][23].

*Singleton* is a *creational* design pattern and defined as follows:

> "Ensure a class only has once instance, and provide a global access point to it."

-- E. Gamma, et al. Design Patterns: elements of reusable object-Oriented software. Westford: Addison-Wesley, 1995, p. 157.

It is suggested to use the trait `SingletonTrait` and not the abstract class `SingletonAbstract`. Refer to the section **Features** below for the reason why.

## Features

* Follows the naming conventions for the *Singleton* design pattern (e.g. offers a static method `getInstance()`).
* Allows to pass arguments to the static method `getInstance()` (and therefore to the `protected` constructor of the class). Because of that, the arguments should be validated within the constructor `__construct()`.
* Allows a number of unlimited classes to use the trait `SingletonTrait`.
  * **Benefit:** A class which uses the `SingletonTrait` can still inherit from another class.
* Allows a number of unlimited classes to subclass the abstract class `SingletonAbstract`. Each class which inherits from `SingletonAbstract` is a *Singleton*. This is realized via *late static binding*.
  * **Downside:** A class which inherits from `SingletonAbstract` can not inherit from another class, since PHP does not allow multiple inheritance.
* Allows to use the *Dependency Injection* architectural pattern. This can be achieved by using *Interface Injection* with the interface `SingletonInterface`.
  **NOTE:** This is a weak point since only a class is a *Singleton* does not mean it provides the same functionality as other *Singleton* classes. But there may be a use case where this can be useful and the interface does not hurt.

* Artifacts tested with both static and dynamic test procedures:
  * Component tests (unit tests) implemented with [PHPUnit][19].
  * Static code analysis with the style checker [PHP_CodeSniffer][14] and the source code analyzer [PHP Mess Detector (PHPMD)][18], [phpcpd][4] and [phpdcd][5].
* Provides support for the dependency manager [Composer][3].
* Provides a [PEAR package][13] which can be installed using the [PEAR installer][11]. Click [here][9] for the [PEAR channel][12].
* Provides a complete Application Programming Interface (API) documentation generated with the documentation generator [ApiGen][2]. Click [here][1] for the online API documentation.
* Follows the [PSR-0][6] requirements for autoloader interoperability.
* Follows the [PSR-1][7] basic coding style guide.
* Follows the [PSR-2][8] coding style guide.
* Follows the [Semantic Versioning][20] requirements for versioning (`<Major version>.<Minor version>.<Patch level>`).

## Requirements

* [PHP][17] 5.4.0 (or later)

## System-Wide Installation

**FlorianWolters\Component\Util\Singleton** should be installed using the [PEAR installer][11]. This installer is the [PHP][17] community's de-facto standard for installing [PHP][17] components.

    pear channel-discover pear.florianwolters.de
    pear install --alldeps fw/Singleton

## As A Dependency On Your Component

If you are creating a component that relies on **FlorianWolters\Component\Util\Singleton**, please make sure that you add **FlorianWolters\Component\Util\Singleton** to your component's `package.xml` file:

```xml
<dependencies>
  <required>
    <package>
      <name>Singleton</name>
      <channel>pear.florianwolters.de</channel>
      <min>0.1.0</min>
      <max>0.1.99</max>
    </package>
  </required>
</dependencies>
```

## Usage

The best documentation for **FlorianWolters\Component\Util\Singleton** are the unit tests, which are shipped in the package. You will find them installed into your [PEAR][10] repository, which on Linux systems is normally `/usr/share/php/test`.

## Development Environment

If you want to patch or enhance this component, you will need to create a suitable development environment. The easiest way to do that is to install [phix4componentdev][16]:

    # phix4componentdev
    pear channel-discover pear.phix-project.org
    pear install phix/phix4componentdev

You can then clone the Git repository:

    # PHP-Component-Util-Singleton
    git clone http://github.com/FlorianWolters/PHP-Component-Util-Singleton

Then, install a local copy of this component's dependencies to complete the development environment:

    # build vendor/ folder
    phing build-vendor

To make life easier for you, common tasks (such as running unit tests, generating code review analytics, and creating the [PEAR package][13]) have been automated using [phing][15]. You'll find the automated steps inside the `build.xml` file that ships with the component.

Run the command `phing` in the component's top-level folder to see the full list of available automated tasks.

## License

This program is free software: you can redistribute it and/or modify it under the terms of the GNU Lesser General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along with this program. If not, see http://gnu.org/licenses/lgpl.txt.

[1]: http://blog.florianwolters.de/PHP-Component-Util-Singleton
[2]: http://apigen.org
[3]: http://getcomposer.org
[4]: https://github.com/sebastianbergmann/phpcpd
[5]: https://github.com/sebastianbergmann/phpdcd
[6]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
[7]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[8]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
[9]: http://pear.florianwolters.de
[10]: http://pear.php.net
[11]: http://pear.php.net/manual/en/guide.users.commandline.cli.php
[12]: http://pear.php.net/manual/en/guide.users.concepts.channel.php
[13]: http://pear.php.net/manual/en/guide.users.concepts.package.php
[14]: http://pear.php.net/package/PHP_CodeSniffer
[15]: http://phing.info
[16]: http://phix-project.org
[17]: http://php.net
[18]: http://phpmd.org
[19]: http://phpunit.de
[20]: http://semver.org
[21]: http://php.net/language.oop5.abstract
[22]: http://php.net/language.oop5.interfaces
[23]: http://php.net/language.oop5.traits
