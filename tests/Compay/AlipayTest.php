<?php

namespace Compay;

use Mockery as m;
use Compay\Tests\TestCase;

class AlipayTest extends TestCase
{
    public function tearDown()
    {
        Compay::setFactory(null);
    }

    public function testGetFactory()
    {
        Compay::setFactory(null);

        $factory = Compay::getFactory();
        $this->assertInstanceOf('Alipay\Common\GatewayFactory', $factory);
    }

    public function testSetFactory()
    {
        $factory = m::mock('Alipay\Common\GatewayFactory');

        Compay::setFactory($factory);

        $this->assertSame($factory, Compay::getFactory());
    }

    public function testCallStatic()
    {
        $factory = m::mock('Alipay\Common\GatewayFactory');
        $factory->shouldReceive('testMethod')->with('some-argument')->once()->andReturn('some-result');

        Compay::setFactory($factory);

        $result = Compay::testMethod('some-argument');
        $this->assertSame('some-result', $result);
    }
}
