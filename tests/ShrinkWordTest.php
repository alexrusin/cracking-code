<?php

namespace CrackingCode\Tests;

use PHPUnit\Framework\TestCase;
use function CrackingCode\shrinkWord;

class ShrinkWordTest extends TestCase
{
    /** @test */
    public function it_returns_false_if_empty_string()
    {
        $this->assertFalse(shrinkWord(''));
    }

    /** @test */
    public function it_shrinks_word()
    {
        $this->assertEquals('a2b2c2', shrinkWord('aabbcc'));
    }

    /** @test */
    public function it_does_not_shrink_word()
    {
        $this->assertEquals('abc', shrinkWord('abc'));
    }

    /** @test */
    public function it_does_shrinks_non_symmetric_word()
    {
        $this->assertEquals('a2bc3d', shrinkWord('aabcccd'));
    }
}
