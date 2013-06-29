<?php
namespace FlorianWolters\Mock;

/**
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @since     Class available since Release 0.3.0
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
     * The protected constructor.
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
