<?php

namespace PHPTests\Strings\Functions;

final class StrtolowerTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicUsage()
    {
        $this->assertSame("abcdefg", strtolower("abCdEfg"));
    }
}
