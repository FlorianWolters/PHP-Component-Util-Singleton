<?php
namespace FlorianWolters\Component\Util\Singleton;

/**
 * The {@link SingletonAbstract} class implements the *Singleton* creational
 * design pattern to ensure a class only has one instance, and to provide a
 * global point of access to it.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @version   Release: @package_version@
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     Class available since Release 0.1.0
 */
abstract class SingletonAbstract implements SingletonInterface
{
    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return SingletonInterface The *Singleton* instance.
     */
    final public static function getInstance()
    {
        /*
         * The *Singleton* instances of the subclasses.
         *
         * This attribute has to be an array because it is shared across all
         * subclasses. Without an array, the first time a *Singleton* is created
         * and stored in this property, all other calls to {@link getInstance}
         * would return the same object, no matter what subclass is used.
         */
        static $instances = [];
        // Get the name of the calling class. The calling class is the concrete
        // class extending this class.
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
     * Private clone method that prevents cloning of this *Singleton*.
     *
     * @return void
     */
    final private function __clone()
    {
    }

    /**
     * Private unserialize method that prevents unserializing of this
     * *Singleton*.
     *
     * @return void
     */
    final private function __wakeup()
    {
    }

    // @codeCoverageIgnoreEnd
}
