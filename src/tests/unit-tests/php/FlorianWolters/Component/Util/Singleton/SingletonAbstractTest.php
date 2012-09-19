<?php
namespace FlorianWolters\Component\Util\Singleton;

/**
 * Test class for {@link SingletonAbstract}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @see       SingletonAbstract
 * @since     Class available since Release 0.1.0
 *
 * @covers FlorianWolters\Component\Util\Singleton\SingletonAbstract
 */
class SingletonAbstractTest extends SingletonTestAbstract
{
    /**
     * Sets up the fixture.
     *
     * This method is called before the first test of this test class is run.
     *
     * @return void
     */
    public static function setUpBeforeClass()
    {
        self::$singletonClass = __NAMESPACE__ . '\SingletonAbstractMock';
        self::$anotherSingletonClass = __NAMESPACE__
            . '\AnotherSingletonAbstractMock';
    }
}
