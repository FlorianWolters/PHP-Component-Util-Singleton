<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Util\Singleton\SingletonTrait;

/**
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     Class available since Release 0.3.0
 */
class SingletonWithProtectedCreationMethod
{
    use SingletonTrait { getInstance as protected; }
}