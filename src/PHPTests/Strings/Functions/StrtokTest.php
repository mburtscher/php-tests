<?php

namespace PHPTests\Strings\Functions;

final class StrtokTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaultBahavior()
    {
        $str = "testing 1/2\\3";

        $this->assertSame("testing", strtok($str, " "));
        $this->assertSame("1", strtok("/"));
        $this->assertSame("2", strtok("\\"));
        $this->assertSame("3", strtok("."));
    }

    public function testChangeString()
    {
        $str = "testing 1/2\\3";

        $this->assertSame("testing", strtok($str, " "));
        $this->assertSame("testing 1", strtok($str, "/"));
    }
}
