<?php

namespace PHPTests\Strings\Functions;

final class StrstrTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicUsage()
    {
        $str = "This is a test";

        $this->assertSame(" is a test", strstr($str, 32));
        $this->assertSame("a test", strstr($str, "a "));
    }
}
