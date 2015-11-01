<?php

namespace PHPTests\Strings\Functions;

final class SprintfTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicUsage()
    {
        $this->assertSame("abcde", sprintf("%.5s", "abcdefghij"));
        $this->assertSame("simple string", sprintf("%s", "simple string"));
        $this->assertSame("42", sprintf("%d", 42));
        $this->assertSame("3.333333", sprintf("%f", 10.0/3));
        $this->assertSame("3.3333333333", sprintf("%.10f", 10.0/3));
        $this->assertSame("2.50      ", sprintf("%-10.2f", 2.5));
        $this->assertSame("2.50000000", sprintf("%-010.2f", 2.5));
        $this->assertSame("0000002.50", sprintf("%010.2f", 2.5));
        $this->assertSame("<                 foo>", sprintf("<%20s>", "foo"));
        $this->assertSame("<bar                 >", sprintf("<%-20s>", "bar"));
        $this->assertSame(" 123456789012345", sprintf(" 123456789012345"));
        $this->assertSame("<høyesterettsjustitiarius>", sprintf("<%15s>", "høyesterettsjustitiarius"));
        $this->assertSame(" 123456789012345678901234567890", sprintf(" 123456789012345678901234567890"));
        $this->assertSame("<     høyesterettsjustitiarius>", sprintf("<%30s>", "høyesterettsjustitiarius"));
        $this->assertSame("-12.34", sprintf("%5.2f", -12.34));
        $this->assertSame("  -12", sprintf("%5d", -12));
        $this->assertSame("@", sprintf("%c", 64));
        $this->assertSame("10101010", sprintf("%b", 170));
        $this->assertSame("aa", sprintf("%x", 170));
        $this->assertSame("AA", sprintf("%X", 170));
        $this->assertSame("        10101010", sprintf("%16b", 170));
        $this->assertSame("              aa", sprintf("%16x", 170));
        $this->assertSame("              AA", sprintf("%16X", 170));
        $this->assertSame("0000000010101010", sprintf("%016b", 170));
        $this->assertSame("00000000000000aa", sprintf("%016x", 170));
        $this->assertSame("00000000000000AA", sprintf("%016X", 170));
        $this->assertSame("abcde", sprintf("%.5s", "abcdefghij"));
        $this->assertSame("gazonk", sprintf("%-2s", "gazonk"));
        $this->assertSame("2 1", sprintf("%2\$d %1\$d", 1, 2));
        $this->assertSame("3 1 2", sprintf("%3\$d %d %d", 1, 2, 3));
        $this->assertSame("02  1", sprintf("%2\$02d %1\$2d", 1, 2));
        $this->assertSame("2   1", sprintf("%2\$-2d %1\$2d", 1, 2));
    }
}
