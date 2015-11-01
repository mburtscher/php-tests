<?php

namespace PHPTests\Strings\Functions;

final class UniqidTest extends \PHPUnit_Framework_TestCase
{
    public function testNoPrefix()
    {
        $id1 = uniqid();
        usleep(1);
        $id2 = uniqid();

        $this->assertNotSame($id1, $id2);
    }

    public function testPrefix()
    {
        $this->assertSame(0, strpos(uniqid("foo"), "foo"));
        $this->assertSame(0, strpos(uniqid("foo", true), "foo"));
    }

    public function testLength()
    {
        $this->assertSame(13, strlen(uniqid()));
        $this->assertSame(23, strlen(uniqid("", true)));
    }
}
