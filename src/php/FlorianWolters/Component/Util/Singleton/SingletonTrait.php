<?php
namespace FlorianWolters\Component\Util\Singleton;

use FlorianWolters\Component\Util\ReflectionUtils;

/**
 * The trait {@see SingletonTrait} implements the *Singleton* creational design
 * pattern to ensure a class only has one instance, and to provide a global
 * point of access to it.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     Trait available since Release 0.1.0
 */
trait SingletonTrait
{
    /**
     * Returns the *Singleton* instance of the class using this trait.
     *
     * @staticvar object[] $instances The *Singleton* instances of the classes
     *                                using this trait.
     *
     * @return object The *Singleton* instance.
     */
    final public static function getInstance()
    {
        // This attribute has to be an array because it is shared across all
        // classes using this trait. Without an array, the first time an
        // instance is created and stored in this variable, all other calls
        // to the method getInstance() would return the same instance, no matter
        // what class is invoked.
        static $instances = [];

        // Get the name of the calling class. The calling class is the concrete
        // class using this trait.
        $className = \get_called_class();

        if (false === isset($instances[$className])) {
            $arguments = \func_get_args();
            $instances[$className] = ReflectionUtils::createNewInstanceWithoutConstructor(
                $className,
                $arguments
            );
        }

        return $instances[$className];
    }

    // @codeCoverageIgnoreStart

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    final private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     *
     * @noinspection PhpUnusedPrivateMethodInspection
     */
    final private function __wakeup()
    {
    }

    // @codeCoverageIgnoreEnd
}
