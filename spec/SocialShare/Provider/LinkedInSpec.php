<?php

/*
 * This file is part of the SocialShare package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\SocialShare\Provider;

use PhpSpec\ObjectBehavior;

/**
 * @author Morrison Laju <morrelinko@gmail.com>
 */
class LinkedInSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SocialShare\Provider\LinkedIn');
        $this->shouldHaveType('SocialShare\Provider\ProviderInterface');
    }

    function it_gets_a_valid_link()
    {
        $this->getLink('http://dunglas.fr')->shouldBe('http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fdunglas.fr');
    }

    function it_gets_a_valid_number_of_shares()
    {
        $this->getShares('http://dunglas.fr')->shouldBeInteger();
    }
}
