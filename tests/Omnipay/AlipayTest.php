<?php

namespace Alipay;

use Mockery as m;
use Alipay\Tests\TestCase;

class AlipayTest extends TestCase
{
    public function tearDown()
    {
        Alipay::setFactory(null);
    }

    public function testGetFactory()
    {
        Alipay::setFactory(null);

        $factory = Alipay::getFactory();
        $this->assertInstanceOf('Alipay\Common\GatewayFactory', $factory);
    }

    public function testSetFactory()
    {
        $factory = m::mock('Alipay\Common\GatewayFactory');

        Alipay::setFactory($factory);

        $this->assertSame($factory, Alipay::getFactory());
    }

    public function testCallStatic()
    {
        $factory = m::mock('Alipay\Common\GatewayFactory');
        $factory->shouldReceive('testMethod')->with('some-argument')->once()->andReturn('some-result');

        Alipay::setFactory($factory);

        $result = Alipay::testMethod('some-argument');
        $this->assertSame('some-result', $result);
    }
}
