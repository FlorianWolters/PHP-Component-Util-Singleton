<?php
/**
 * `SingletonTrait.php`
 *
 * This file is part of fwComponents.
 *
 * fwComponents is free software: you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the Free
 * Software Foundation, either version 3 of the License, or (at your option) any
 * later version.
 *
 * fwComponents is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with fwComponents.  If not, see http://gnu.org/licenses/lgpl.txt.
 *
 * PHP version 5.4
 *
 * @category  Component
 * @package   Util
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @version   GIT: $Id$
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     File available since Release 0.1.0
 */

namespace FlorianWolters\Component\Util\Singleton;

/**
 * The trait {@link SingletonTrait} implements the *Singleton* creational design
 * pattern to ensure a class only has one instance, and to provide a global
 * point of access to it.
 *
 * @category  Component
 * @package   Util
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @version   Release: @package_version@
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     Trait available since Release 0.1.0
 */
trait SingletonTrait
{

    /**
     * Returns the *Singleton* instance of the class using this trait.
     *
     * @return object The *Singleton* instance.
     */
    final public static function getInstance()
    {
        // The *Singleton* instance of the class using this trait.
        static $instance = null;

        if (null === $instance) {
            $arguments = \func_get_args();
            $instance = new static($arguments);
        }

        return $instance;
    }

    // @codeCoverageIgnoreStart

    /**
     * Protected constructor that prevents creating a new instance of this
     * *Singleton* via the `new` operator.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method that prevents cloning of the *Singleton*.
     *
     * @return void
     */
    final private function __clone()
    {
    }

    /**
     * Private unserialize method that prevents unserializing of the
     * *Singleton*.
     *
     * @return void
     */
    final private function __wakeup()
    {
    }

    // @codeCoverageIgnoreEnd

}
