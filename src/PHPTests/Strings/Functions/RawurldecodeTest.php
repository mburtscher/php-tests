<?php

namespace PHPTests\Strings\Functions;

final class RawurldecodeTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicUsage()
    {
        $raw = ' !"#$%&\'()*+,-./0123456789:;<=>?'
            . '@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_'
            . '`abcdefghijklmnopqrstuvwxyz{|}~'
            . "\0";
        $encoded = '%20%21%22%23%24%25%26%27%28%29%2A%2B%2C-.%2F0123456789%3A%3B%3C%3D%3E%3F'
            . '%40ABCDEFGHIJKLMNOPQRSTUVWXYZ%5B%5C%5D%5E_'
            . '%60abcdefghijklmnopqrstuvwxyz%7B%7C%7D~'
            . '%00';

        $this->assertSame($raw, rawurldecode($encoded));
    }
}
