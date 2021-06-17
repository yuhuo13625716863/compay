<?php

namespace Compay\Common\Exception;

use Compay\Tests\TestCase;

class BadMethodCallExceptionTest extends TestCase
{
    public function testConstruct()
    {
        $exception = new BadMethodCallException('Oops');
        $this->assertSame('Oops', $exception->getMessage());
    }
}
