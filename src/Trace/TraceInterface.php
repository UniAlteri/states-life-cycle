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
 *
 * @copyright   Copyright (c) 2009-2016 Richard Déloge (richarddeloge@gmail.com)
 *
 * @link        http://teknoo.software/states Project website
 *
 * @license     http://teknoo.software/license/mit         MIT License
 * @author      Richard Déloge <richarddeloge@gmail.com>
 */

namespace Teknoo\States\LifeCycle\Trace;
use Teknoo\States\LifeCycle\Observing\ObservedInterface;

/**
 * Interface TraceInterface
 *
 *
 * @copyright   Copyright (c) 2009-2016 Richard Déloge (richarddeloge@gmail.com)
 *
 * @link        http://teknoo.software/states Project website
 *
 * @license     http://teknoo.software/license/mit         MIT License
 * @author      Richard Déloge <richarddeloge@gmail.com>
 */
interface TraceInterface
{
    /**
     * @return \SplStack|EntryInterface[]
     */
    public function getTrace(): \SplStack;

    /**
     * @return bool
     */
    public function isEmpty(): \bool;

    /**
     * @return EntryInterface
     */
    public function getFirstEntry(): EntryInterface;

    /**
     * @return EntryInterface
     */
    public function getLastEntry(): EntryInterface;

    /**
     * @param ObservedInterface $observed
     * @param array $enabledStatesList
     * @return TraceInterface
     */
    public function addEntry(ObservedInterface $observed, array $enabledStatesList): TraceInterface;
}