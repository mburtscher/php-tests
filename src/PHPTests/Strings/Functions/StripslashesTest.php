<?php

namespace PHPTests\Strings\Functions;

final class StripslashesTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicUsage()
    {
        $this->assertSame("\$'", stripslashes("\$\\'"));
    }
}
