<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Component\Core\Exception;

use PhpSpec\ObjectBehavior;
use Sylius\Component\Core\Exception\ChannelNotDefinedException;

/**
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
 */
final class ChannelNotDefinedExceptionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Message');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ChannelNotDefinedException::class);
    }

    function it_is_a_runtime_exception()
    {
        $this->shouldHaveType(\RuntimeException::class);
    }
}
