<?php
/**
 * `SingletonTraitMock.php`
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

namespace FlorianWolters\Component\Util\Singleton;

/**
 * Mock class for {@link SingletonTraitTest}.
 *
 * @category  Component
 * @package   Util
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2011 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @version   Release: @package_version@
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @see       SingletonTraitTest
 * @since     Class available since Release 0.1.0
 */
class SingletonTraitMock
{

    /**
     * This class implements the *Singleton* design pattern.
     */
    use SingletonTrait;

    /**
     * The arguments passed to the constructor.
     *
     * @var array
     */
    public $args;

    /**
     * The protected constructor.
     *
     * @param array $args The arguments.
     */
    protected function __construct(array $args = array())
    {
        $this->args = $args;
    }

}

class AnotherSingletonTraitMock extends SingletonTraitMock
{
}
