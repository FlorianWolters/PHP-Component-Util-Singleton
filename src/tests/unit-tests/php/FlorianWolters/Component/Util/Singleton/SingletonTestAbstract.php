<?php
namespace FlorianWolters\Component\Util\Singleton;

/**
 * Test class for {@link SingletonTestAbstract}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     Class available since Release 0.1.0
 */
abstract class SingletonTestAbstract extends \PHPUnit_Framework_TestCase
{
    /**
     * The qualified class name of the *Singleton* class under test.
     *
     * @var string
     */
    protected static $singletonClass;

    /**
     * The qualified class name of another *Singleton* class.
     *
     * @var string
     */
    protected static $anotherSingletonClass;

    /**
     * The mock object under test.
     *
     * @var SingletonTraitMock
     */
    protected $objUnderTest;

    /**
     * Sets up the fixture.
     *
     * @return void
     */
    public function setUp()
    {
        $className = self::$singletonClass;
        $this->objUnderTest = $className::getInstance('foo', 13, 'bar');
    }

    /**
     * Tests whether the *Singleton* is not instantiable.
     *
     * @return void
     *
     * @test
     */
    public function testClassIsNotInstantiable()
    {
        $reflectedClass = new \ReflectionClass($this->objUnderTest);
        self::assertFalse($reflectedClass->isInstantiable());
    }

    /**
     * Tests whether the *Singleton* is not cloneable.
     *
     * @return void
     *
     * @test
     */
    public function testObjectIsNotClonable()
    {
        $reflectedMethod = new \ReflectionMethod(
            $this->objUnderTest,
            '__clone'
        );

        self::assertTrue($reflectedMethod->isFinal());
        self::assertTrue($reflectedMethod->isPrivate());
    }

    /**
     * Tests whether the *Singleton* is not serializable.
     *
     * @return void
     *
     * @test
     */
    public function testObjectIsNotSerializable()
    {
        $reflectedMethod = new \ReflectionMethod(
            $this->objUnderTest,
            '__wakeup'
        );

        self::assertTrue($reflectedMethod->isFinal());
        self::assertTrue($reflectedMethod->isPrivate());
    }

    /**
     * Tests whether the method `getInstance()` of the *Singleton* returns the
     * same instance.
     *
     * @return void
     *
     * @test
     */
    public function testGetInstanceReturnsSameObject()
    {
        $className = self::$singletonClass;
        $this->assertEquals($this->objUnderTest, $className::getInstance());
    }

    /**
     * Tests whether arguments can be passed to the method `getInstance()` of
     * the *Singleton*.
     *
     * @return void
     *
     * @test
     */
    public function testGetInstanceSupportsArguments()
    {
        $args = ['foo', 13, 'bar'];
        $this->assertEquals($args, $this->objUnderTest->args);
    }

    /**
     * Tests whether a *Singleton* class can be subclassed and whether more than
     * one class can be declared as a *Singleton*.
     *
     * @return void
     *
     * @test
     */
    public function testSupportsInheritanceAndMultipleDeclaration()
    {
        $parentObj = $this->objUnderTest;
        $className = self::$anotherSingletonClass;
        $childObj = $className::getInstance(['foo', 13, 'bar']);

        $this->assertNotEquals($parentObj, $childObj);
    }

    /**
     * Tests whether the object type of a *Singleton* superclass is actually the
     * superclass type.
     *
     * @return void
     *
     * @test
     */
    public function testInstanceOfSingletonSuperclass()
    {
        $expected = self::$singletonClass;
        $actual = $this->objUnderTest;

        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * Tests whether the object type of a *Singleton* subclass is actually the
     * subclass type.
     *
     * @return void
     *
     * @test
     */
    public function testInstanceOfSingletonSubclass()
    {
        $expected = self::$singletonClass;

        $anotherSingletonClass = self::$anotherSingletonClass;
        $actual = $anotherSingletonClass::getInstance();

        $this->assertInstanceOf($expected, $actual);
    }
}
