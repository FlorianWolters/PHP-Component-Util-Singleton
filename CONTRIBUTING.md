# Contributing Guidelines

Contributions to **FlorianWolters\Component\Util\Singleton** are always welcome.

Once version *1.0.0* is reached, I will try to keep backwards compatibility breaks to an **absolute minimum**. Please keep that in account when you propose a change or a feature.

Please use the following two [GitHub][1] features to contribute:

1. Report an *issue*.
2. Submit a *pull request*.

## Getting Started

1. [Sign up][2] for GitHub.
2. *Fork* the repository on GitHub.
3. *Clone* the repository into a new directory on your local host.
4. Modify the implementation source code.
5. Modify the test source code. Refactoring and documentation changes require no new tests. If you are adding functionality or fixing a bug **do add** a **new** test.
6. Run the test suite(s). I only accept pull requests with **passing tests**.
7. *Commit* and *Push* to the *fork*.
8. Submit a *pull request*.

### Clone the repository into a new directory on your local host.

Run the following commands to initially checkout **FlorianWolters\Component\Util\Singleton**:

    md Singleton && cd Singleton
    git clone git://github.com/FlorianWolters/PHP-Component-Util-Singleton.git

### Run the test suite(s)

Before you send a pull request, run all test suite(s). To run the test suite(s), a system-wide installation of [PHPUnit][3] is required.

[PHPUnit][3] can be installed via the [PEAR installer][4]. Run the following commands to install [PHPUnit][3]:

    pear preferred_state stable
    pear config-set auto_discover 1
    pear channel-discover pear.phpunit.de
    pear install --alldeps phpunit/PHPUnit

Run the test suite(s) with the following command in the directory with the local Git repository:

    phpunit

[1]: https://github.com
     "GitHub"
[2]: https://github.com/signup/free
     "Sign up for GitHub"
[3]: http://phpunit.de
     "sebastianbergmann/phpunit · GitHub"
[4]: http://pear.php.net/manual/en/guide.users.commandline.cli.php
     "Manual :: Command line installer (PEAR)"
