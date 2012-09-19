<?php
namespace FlorianWolters\Component\Util\Singleton;

/**
 * A mock class for {@link SingletonTraitTest}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Singleton
 * @see       SingletonTraitTest
 * @since     Class available since Release 0.1.0
 */
class SingletonTraitMock implements SingletonInterface
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
