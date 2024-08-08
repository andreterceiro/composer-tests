<?php
use PHPUnit\Framework\TestCase;
use Andreterceiro\libs\Math;

final class HelloWorldTest extends TestCase
{
    public function testDummy() {
        $this->assertTrue(true);
    }

    public function testEquals() {
        $this->assertEquals(1, 1);
    }

    public function testEqualsLib() {
        $math = new Math;
        $this->assertEquals(1, 1);
    }
}