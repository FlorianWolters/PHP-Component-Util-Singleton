<?php
/**
 * FlorianWolters\Example\MultitonWithoutArguments
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 */

namespace FlorianWolters\Example;

use FlorianWolters\Component\Util\Singleton\MultitonTrait;

/**
 * The MultitonWithArguments class implements a *Multiton* **without**
 * constructor arguments.
 *
 * @since Class available since Release 0.3.0
 */
class MultitonWithoutArguments
{
    use MultitonTrait;
}
