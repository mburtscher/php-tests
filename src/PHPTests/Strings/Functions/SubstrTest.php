<?php

class SubstrTest extends PHPUnit_Framework_TestCase
{
    public function testOffsetOnly()
    {
        $this->assertSame("ng12345", substr("string12345", 4));
        $this->assertFalse(substr("string12345", 15));
    }

    public function testOffsetAndLength()
    {
        $this->assertSame("ng", substr("string12345", 4, 2));
        $this->assertSame("5", substr("string12345", 10, 2));
    }

    public function testNegativeOffset()
    {
        $this->assertSame("345", substr("string12345", -3));
        $this->assertSame("34", substr("string12345", -3, 2));
        $this->assertSame("5", substr("string12345", -1, 2));
        $this->assertSame("string12345", substr("string12345", -15));
    }

    public function testNegativeLength()
    {
        $this->assertSame("123", substr("string12345", 6, -2));
        $this->assertSame("3", substr("string12345", -3, -2));
    }

    public function testNoLength()
    {
        $this->assertSame("", substr("string12345", 0, 0));
        $this->assertSame("", substr("string12345", 0, false));
        $this->assertSame("", substr("string12345", 0, null));
    }

    public function testBug1386NullCharacters()
    {
        $this->assertSame("\0", substr("\0\0", 1));
    }
}
