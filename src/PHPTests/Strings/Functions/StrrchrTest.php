<?php

namespace PHPTests\Strings\Functions;

final class StrrchrTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicUsage()
    {
        $str = "fola fola blakken";

        $this->assertSame("blakken", strrchr($str, "b"));
        $this->assertSame("fola blakken", strrchr($str, 102));
    }
}
