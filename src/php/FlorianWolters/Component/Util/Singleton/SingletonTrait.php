<?php
namespace FlorianWolters\Component\Util\Singleton;

/**
 * The trait {@link SingletonTrait} implements the *Singleton* creational design
 * pattern to ensure a class only has one instance, and to provide a global
 * point of access to it.
 *
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
        // The *Singleton* instances of the classes using this trait.
        static $instances = [];

        $className = \get_called_class();

        if (false === isset($instances[$className])) {
            $arguments = \func_get_args();
            $instances[$className] = new $className($arguments);
        }

        return $instances[$className];
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
