<?php
namespace FlorianWolters\Component\Util\Singleton;

use \ReflectionClass;
use \ReflectionException;

/**
 * The trait {@link ReflectionTrait} contains static methods which simplify the
 * usage of the {@link http://php.net//book.reflection PHP reflection API}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     Trait available since Release 0.3.0
 * @todo      Convert into a static class.
 * @todo      Extract and create a distinct Reflection Component.
 */
trait ReflectionTrait
{
    /**
     * Creates a new instance for the specified class name without invoking the
     * constructor.
     *
     * @param string  $className  The name of the class to reflect.
     * @param mixed[] $parameters Zero or more parameters to be passed to the
     *                            constructor. It accepts a variable number of
     *                            parameters which are passed to the
     *                            constructor.
     *
     * @return object A new instance of the class to reflect.
     *
     * @throw ReflectionException If the class with the specified class name
     *                            does not exist.
     */
    private static function createNewInstanceWithoutConstructor(
        $className,
        array $parameters = array()
    ) {
        $reflectedClass = new ReflectionClass($className);
        $newInstance = $reflectedClass->newInstanceWithoutConstructor();
        $reflectedConstructor = $reflectedClass->getConstructor();

        if (null !== $reflectedConstructor) {
            $reflectedConstructor->setAccessible(true);
            $reflectedConstructor->invokeArgs($newInstance, $parameters);
        }

        return $newInstance;
    }
}
