<?php

class StrtrTest extends PHPUnit_Framework_TestCase
{
    public function testStringParameters()
    {
        $this->assertSame("t5st abc456gh", strtr("test abcdefgh", "def", "456"));
    }

    public function testPairs()
    {
        $this->assertSame(
            "t12t ab345fgh",
            strtr(
                "test abcdefgh",
                [
                    "es" => "12",
                    "cde" => "345",
                ]
            )
        );
    }

    public function testReturnsFalseForEmptyStringKey()
    {
        $this->assertFalse(
            strtr(
                "test abcdefgh",
                [
                    "" => "foo",
                ]
            )
        );
    }
}
