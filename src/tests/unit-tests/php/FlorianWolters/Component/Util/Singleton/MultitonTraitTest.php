<?php
namespace FlorianWolters\Component\Util\Singleton;

/**
 * Test class for {@see MultitonTrait}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @see       MultitonTrait
 * @since     Class available since Release 0.3.0
 *
 * @covers FlorianWolters\Component\Util\Singleton\MultitonTrait
 */
class MultitonTraitTest extends SingletonTestAbstract
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
        self::$traitName = __NAMESPACE__ . '\MultitonTrait';
        self::$classNameParent = 'FlorianWolters\Mock\MultitonWithoutArguments';
        self::$classNameChild = 'FlorianWolters\Mock\MultitonWithArguments';
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

        $this->assertNotEquals($firstInstance, $secondInstance);
    }
}
