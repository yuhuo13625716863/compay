<?php

namespace Compay\Common\Exception;

use Compay\Tests\TestCase;

class InvalidCreditCardExceptionTest extends TestCase
{
    public function testConstruct()
    {
        $exception = new InvalidCreditCardException('Oops');
        $this->assertSame('Oops', $exception->getMessage());
    }
}
