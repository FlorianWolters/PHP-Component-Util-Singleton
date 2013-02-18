<?php
namespace FlorianWolters\Component\Util\Singleton;

use FlorianWolters\Component\Util\ReflectionUtils;

/**
 * The trait {@see MultitonTrait} implements the *Multiton* (also known as
 * *Registry of Singletons*) creational design pattern to ensure a class only
 * has a limited number of instances, and to provide a global point of access to
 * it.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     Trait available since Release 0.1.0
 */
trait MultitonTrait
{
    /**
     * Returns the *Multiton* instance of the class using this trait.
     *
     * @staticvar object[] $instances The *Multiton* instances of the classes
     *                                using this trait.
     *
     * @return object The *Multiton* instance.
     */
    public static function getInstance()
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

        $arguments = \func_get_args();
        $key = $className . \serialize($arguments);

        if (false === isset($instances[$key])) {
            $instances[$key] = ReflectionUtils::createNewInstanceWithoutConstructor(
                $className,
                $arguments
            );
        }

        return $instances[$key];
    }

    // @codeCoverageIgnoreStart

    /**
     * Protected constructor to prevent creating a new instance of this class
     * via the `new` operator.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of this class.
     *
     * @return void
     */
    final private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the instance of
     * this class.
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
