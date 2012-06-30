<?php
/**
 * `SingletonAbstractTest.php`
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
 * Test class for `{@link SingletonAbstract}`.
 *
 * @category  Component
 * @package   Util
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @version   Release: @package_version@
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
        self::$_classUnderTest = __NAMESPACE__ . '\SingletonAbstractMock';
        self::$_anotherSingletonClass = __NAMESPACE__ . '\AnotherSingletonAbstractMock';
    }

}
