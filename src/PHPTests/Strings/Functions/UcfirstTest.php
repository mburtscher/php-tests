<?php

namespace PHPTests\Strings\Functions;

class UcfirstTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicUsage()
    {
        $this->assertSame("Fahrvergnuegen", ucfirst("fahrvergnuegen"));
    }
}
