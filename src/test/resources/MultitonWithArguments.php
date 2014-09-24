<?php
/**
 * FlorianWolters\Example\MultitonWithArguments
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 */

namespace FlorianWolters\Example;

/**
 * The MultitonWithArguments class implements a *Multiton* **with** constructor
 * arguments.
 *
 * @since Class available since Release 0.3.0
 */
class MultitonWithArguments extends MultitonWithoutArguments
{
    /**
     * @var string
     */
    public $string;

    /**
     * @var boolean
     */
    public $boolean;

    /**
     * Initializes a new instance of the MultitonWithArguments class.
     *
     * @param string  $string  A `string` value.
     * @param boolean $boolean A `boolean` value.
     */
    protected function __construct($string, $boolean = true)
    {
        $this->string = $string;
        $this->boolean = $boolean;
    }
}
