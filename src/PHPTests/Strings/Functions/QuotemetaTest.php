<?php

namespace PHPTests\Strings\Functions;

final class QuotemetaTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicUsage()
    {
        $raw = "a.\\+*?" . chr(91) . "^" . chr(93) . "b\$c";

        $this->assertSame("a\\.\\\\\\+\\*\\?\\[\\^\\]b\\\$c", quotemeta($raw));
    }
}
