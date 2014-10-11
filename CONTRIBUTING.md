# Contributing Guidelines

## Table of Contents (ToC)

* [Introduction](#introduction)
* [Process](#process)
* [Licensing](#licensing)

## Introduction

Contributions to [**FlorianWolters\Component\Util\Singleton**][10] are
**welcome** and will be **credited**.

**Note:** Once version *1.0.0* is reached, all contributors shall try to keep
backwards compatibility breaks to an **absolute minimum**.

Please be aware of the above note when proposing a change or a feature.

Please use the following two [GitHub][1] features to contribute:

1. Report an [*issue*][11].
2. Submit a [*pull request*][12].

## Process

1. [Sign up][2] for GitHub.
2. [*Fork*][13] the project repository on GitHub.
3. *Clone* the project repository into a new directory on a local host.
4. Modify the implementation source code.
5. Modify the test source code. Refactoring and documentation changes require no
   new tests. If adding functionality or fixing a bug **do add** a **new** test.
6. Run the test suite(s). Only pull requests with **passing tests** are
   accepted.
7. *Commit* and *Push* to the previously created *fork*.
8. Submit a *pull request*.

### Clone the repository into a new directory on a local host.

Run the following commands to checkout
[**FlorianWolters\Component\Util\Singleton**][10]:

    md Singleton && cd Singleton
    git clone git://github.com/FlorianWolters/PHP-Component-Util-Singleton.git

### Run the test suite(s)

Before sending a pull request, run all test suite(s). To run the test suite(s)
[PHPUnit][3] is required, which is defined as a `require-dev` in the
[`composer.json`][14] [Composer][4] configuration file of the project.

Run the test suite(s) with the following command in the directory with the local
Git repository:

    phpunit

## Licensing

By contributing source code the contributor agrees to license the contributions
under the GNU [Lesser General Public License (LGPL)][5].

[1]: https://github.com
     "GitHub"
[2]: https://github.com/signup/free
     "Sign up for GitHub"
[3]: https://phpunit.de
     "PHPUnit"
[4]: https://getcomposer.com
     "Composer"
[5]: https://gnu.org/licenses/lgpl.txt
     "GNU Lesser General Public License"
[10]: https://github.com/FlorianWolters/PHP-Component-Util-Singleton
      "FlorianWolters/PHP-Component-Util-Singleton · GitHub"
[11]: https://github.com/FlorianWolters/PHP-Component-Util-Singleton/issues
      "Issues · FlorianWolters/PHP-Component-Util-Singleton · GitHub"
[12]: https://github.com/FlorianWolters/PHP-Component-Util-Singleton/pulls
      "Pull Requests · FlorianWolters/PHP-Component-Util-Singleton · GitHub"
[13]: https://github.com/FlorianWolters/PHP-Component-Util-Singleton/fork
      "Fork your own copy of FlorianWolters/PHP-Component-Util-Singleton to your account"
[14]: https://github.com/FlorianWolters/PHP-Component-Util-Singleton/blob/master/composer.json
      "PHP-Component-Util-Singleton/composer.json at master · FlorianWolters/PHP-Component-Util-Singleton"
