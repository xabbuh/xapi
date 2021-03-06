<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\XApi\Bundle\LrsBundle\Tests\Listener;

use Xabbuh\XApi\Bundle\LrsBundle\Listener\StatementResultSerializerListener;
use Xabbuh\XApi\DataFixtures\StatementResultFixtures;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class StatementResultSerializerListenerTest extends AbstractSerializerListenerTest
{
    protected function getDomainObjectClass()
    {
        return 'StatementResult';
    }

    protected function getSerializerMethod()
    {
        return 'serializeStatementResult';
    }

    protected function createListener()
    {
        return new StatementResultSerializerListener($this->serializer);
    }

    protected function getDomainObject()
    {
        return StatementResultFixtures::getStatementResult();
    }

    protected function getDefaultDomainObjectConstructorArguments()
    {
        return array(array());
    }
}
