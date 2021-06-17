<?php

namespace Compay\Common\Exception;

use Compay\Tests\TestCase;

class RuntimeExceptionTest extends TestCase
{
    public function testConstruct()
    {
        $exception = new RuntimeException('Oops');
        $this->assertSame('Oops', $exception->getMessage());
    }
}
