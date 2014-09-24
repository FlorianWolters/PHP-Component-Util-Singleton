<?php
/**
 * FlorianWolters\Component\Util\Singleton\SingletonTraitTest
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 */

namespace FlorianWolters\Component\Util\Singleton;

/**
 * Test class for {@see SingletonTrait}.
 *
 * @see    SingletonTrait
 * @since  Class available since Release 0.1.0
 * @covers FlorianWolters\Component\Util\Singleton\SingletonTrait
 */
class SingletonTraitTest extends SingletonTestAbstract
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
        self::$traitName = __NAMESPACE__ . '\SingletonTrait';
        self::$classNameParent = 'FlorianWolters\Example\SingletonWithoutArguments';
        self::$classNameChild = 'FlorianWolters\Example\SingletonWithArguments';
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     *
     * @test
     */
    public function testGetInstanceWithEqualParameters()
    {
        $className = self::$classNameChild;
        $firstInstance = $className::getInstance('foo');
        $secondInstance = $className::getInstance('foo');

        $this->assertEquals($firstInstance, $secondInstance);
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     *
     * @test
     */
    public function testGetInstanceWithNotEqualParameters()
    {
        $className = self::$classNameChild;
        $firstInstance = $className::getInstance('foo');
        $secondInstance = $className::getInstance('bar');

        $this->assertEquals($firstInstance, $secondInstance);
    }
}
