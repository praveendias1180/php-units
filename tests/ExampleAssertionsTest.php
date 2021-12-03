<?php

use PHPUnit\Framework\TestCase;

class ExampleAssertionsTest extends TestCase
{
    public function testThatStringsMatch()
    {
        $str1 = 'test';
        $str2 = 'test';
        $str3 = 'tesT';
        $this->assertSame($str1, $str2);
        $this->assertSame($str1, $str3);
    }
}