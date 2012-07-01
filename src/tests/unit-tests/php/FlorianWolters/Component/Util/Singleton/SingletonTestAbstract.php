<?php
/**
 * `SingletonTestAbstract.php`
 *
 * This file is part of fwComponents.
 *
 * fwComponents is free software: you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the Free
 * Software Foundation, either version 3 of the License, or (at your option) any
 * later version.
 *
 * fwComponents is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with fwComponents.  If not, see http://gnu.org/licenses/lgpl.txt.
 *
 * PHP version 5.4
 *
 * @category  Component
 * @package   Util
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @version   GIT: $Id$
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     File available since Release 0.1.0
 */

declare(encoding = 'UTF-8');

namespace FlorianWolters\Component\Util\Singleton;

/**
 * Test class for `{@link SingletonTestAbstract}`.
 *
 * @category  Component
 * @package   Util
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @version   Release: @package_version@
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
    public function setUp() {
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
            $this->objUnderTest, '__clone'
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
            $this->objUnderTest, '__wakeup'
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
    public function testSupportsInheritanceAndMultipleDeclaration() {
        $className = self::$anotherSingletonClass;
        $this->assertNotEquals($className::getInstance(), $this->objUnderTest);
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
        $this->assertInstanceOf(self::$singletonClass, $this->objUnderTest);
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
        $className = self::$anotherSingletonClass;
        $this->assertInstanceOf(
            self::$anotherSingletonClass, $className::getInstance()
        );
    }

}
