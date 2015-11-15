<?php

/**
 * States.
 *
 * LICENSE
 *
 * This source file is subject to the MIT license and the version 3 of the GPL3
 * license that are bundled with this package in the folder licences
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@uni-alteri.com so we can send you a copy immediately.
 *
 * @copyright   Copyright (c) 2009-2016 Uni Alteri (http://uni-alteri.com)
 * @copyright   Copyright (c) 2009-2016 Richard Déloge (r.deloge@uni-alteri.com)
 *
 * @link        http://teknoo.software/states Project website
 *
 * @license     http://teknoo.software/license/mit         MIT License
 * @author      Richard Déloge <r.deloge@uni-alteri.com>
 */

namespace Teknoo\Tests\States\LifeCycle\StatedClass\Support\Acme;

use Teknoo\States\LifeCycle\StatedClass\LifeCyclableInterface;
use Teknoo\States\LifeCycle\StatedClass\LifeCyclableTrait;
use Teknoo\States\Proxy\Integrated;

/**
 * Class Acme.
 *
 * @copyright   Copyright (c) 2009-2016 Uni Alteri (http://uni-alteri.com)
 * @copyright   Copyright (c) 2009-2016 Richard Déloge (r.deloge@uni-alteri.com)
 *
 * @link        http://teknoo.software/states Project website
 *
 * @license     http://teknoo.software/license/mit         MIT License
 * @author      Richard Déloge <r.deloge@uni-alteri.com>
 */
class Acme extends Integrated implements LifeCyclableInterface
{
    use LifeCyclableTrait;

    /**
     * For AssertionTest
     * @var mixed
     */
    protected $foo;

    /**
     * For AssertionTest
     * @var mixed
     */
    protected $foo1;

    /**
     * For AssertionTest
     * @var mixed
     */
    protected $foo2;

    /**
     * @param mixed $foo
     * @return self
     */
    public function setFoo($foo)
    {
        $this->foo = $foo;

        return $this;
    }

    /**
     * @param mixed $foo1
     * @return self
     */
    public function setFoo1($foo1)
    {
        $this->foo1 = $foo1;

        return $this;
    }

    /**
     * @param mixed $foo2
     * @return self
     */
    public function setFoo2($foo2)
    {
        $this->foo2 = $foo2;

        return $this;
    }
}
