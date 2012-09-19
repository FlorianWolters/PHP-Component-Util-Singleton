<?php
namespace FlorianWolters\Component\Util\Singleton;

/**
 * The interface {@link SingletonInterface} can be implemented to mark a class
 * as a *Singleton*.
 *
 * The *Singleton* creational design pattern is used to ensure that a class only
 * has one instance, and to provide a global point of access to it.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     Interface available since Release 0.1.0
 */
interface SingletonInterface
{
    /**
     * Returns the *Singleton* instance.
     *
     * @return SingletonInterface The *Singleton* instance.
     */
    public static function getInstance();
}
