<?php
namespace FlorianWolters\Component\Util\Singleton;

use \ReflectionClass;
use \ReflectionMethod;

/**
 * Test abstract class {@see SingletonTestAbstract} is the base test case for
 * all *Singleton* implementations.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     Class available since Release 0.1.0
 */
abstract class SingletonTestAbstract extends \PHPUnit_Framework_TestCase
{
    /**
     * The qualified name of the trait under test.
     *
     * @var string
     */
    protected static $traitName;

    /**
     * The qualified class name of a concrete *Singleton* class.
     *
     * @var string
     */
    protected static $classNameParent;

    /**
     * The qualified class name of a concrete *Singleton* class extending
     * another concrete *Singleton* class.
     *
     * @var string
     */
    protected static $classNameChild;

    /**
     * The *Singleton* mock under test.
     *
     * @var object
     */
    private $singletonWithoutArguments;

    /**
     * Sets up the fixture.
     *
     * This method is called before a test is executed.
     *
     * @return void
     */
    public function setUp()
    {
        // TODO Modify with the release of PHPUnit 3.8.
        // https://github.com/sebastianbergmann/phpunit-mock-objects/issues/110
//        $this->singleton = $this->getObjectForTrait(self::$traitName, ['foo', false]);
        $classNameChild = self::$classNameChild;
        $classNameParent = self::$classNameParent;
        $this->singletonWithoutArguments = $classNameParent::getInstance();
        $this->singletonWithArguments = $classNameChild::getInstance('foo', false);
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
        $reflectedClass = new ReflectionClass($this->singletonWithoutArguments);

        $this->assertFalse($reflectedClass->isInstantiable());
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
        $reflectedMethod = new ReflectionMethod(
            $this->singletonWithoutArguments,
            '__clone'
        );

        $this->assertTrue($reflectedMethod->isFinal());
        $this->assertTrue($reflectedMethod->isPrivate());
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
        $reflectedMethod = new ReflectionMethod(
            $this->singletonWithoutArguments,
            '__wakeup'
        );

        $this->assertTrue($reflectedMethod->isFinal());
        $this->assertTrue($reflectedMethod->isPrivate());
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
        $singleton = $this->singletonWithoutArguments;
        $firstInstance = $singleton::getInstance();
        $secondInstance = $singleton::getInstance();

        $this->assertEquals($firstInstance, $secondInstance);
    }

    /**
     * Tests whether arguments can be passed to the method `getInstance()` (and
     * therefore to the constructor) of the *Singleton*.
     *
     * @return void
     *
     * @test
     */
    public function testGetInstanceSupportsArguments()
    {
        $this->assertEquals('foo', $this->singletonWithArguments->string);
        $this->assertFalse($this->singletonWithArguments->boolean);
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
        $this->assertNotEquals(
            $this->singletonWithArguments,
            $this->singletonWithoutArguments
        );
    }

    /**
     * Tests whether the object type of a *Singleton* superclass is the
     * superclass type.
     *
     * @return void
     *
     * @test
     */
    public function testInstanceOfSingletonSuperclass()
    {
        $this->assertInstanceOf(
            self::$classNameParent,
            $this->singletonWithoutArguments
        );
    }

    /**
     * Tests whether the object type of a *Singleton* subclass is the subclass
     * type.
     *
     * @return void
     *
     * @test
     */
    public function testInstanceOfSingletonSubclass()
    {
        $this->assertInstanceOf(
            self::$classNameParent,
            $this->singletonWithArguments
        );
    }

    /**
     * Tests whether the method `getInstance()` of the *Singleton* returns the
     * same instance if called with equal parameters.
     *
     * @return void
     *
     * @test
     */
    abstract public function testGetInstanceWithEqualParameters();

    /**
     * Tests whether the method `getInstance()` of the *Singleton* returns
     * another instance if called with other parameters.
     *
     * @return void
     *
     * @test
     */
    abstract public function testGetInstanceWithNotEqualParameters();
}
