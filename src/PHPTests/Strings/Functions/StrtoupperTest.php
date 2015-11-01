<?php

namespace PHPTests\Strings\Functions;

final class StrtoupperTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicUsage()
    {
        $this->assertSame("ABCDEFG", strtoupper("abCdEfg"));
    }
}
