<?php

namespace PHPTests\Strings\Functions;

final class AddslashesTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicUsage()
    {
        $this->assertSame("\\\"\\\\\\'", addslashes("\"\\'"));
    }
}
