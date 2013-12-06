<?php

namespace ValueObjects\Tests\Number;

use ValueObjects\Tests\TestCase;
use ValueObjects\Number\Real;

class RealTest extends TestCase
{
    public function testGetValue()
    {
        $real = new Real(3.4);
        $this->assertEquals(3.4, $real->getValue());
    }

    public function testEquals()
    {
        $real1 = new Real(5.64);
        $real2 = new Real(5.64);
        $real3 = new Real(6.01);

        $this->assertTrue($real1->equals($real2));
        $this->assertTrue($real2->equals($real1));
        $this->assertFalse($real1->equals($real3));

        $mock = $this->getMock('ValueObjects\ValueObjectInterface');
        $this->assertFalse($real1->equals($mock));
    }

    public function testToString()
    {
        $real = new Real(.7);
        $this->assertEquals('.7', $real->__toString());
    }
}
