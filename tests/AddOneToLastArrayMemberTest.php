<?php

namespace CrackingCode\Tests;

use PHPUnit\Framework\TestCase;
use function CrackingCode\addOneToLastArrayMember;

class AddOneToLastArrayMemberTest extends TestCase
{
    /** @test */
    function it_returns_false_if_array_is_empty()
    {
        $result = addOneToLastArrayMember([]);

        $this->assertFalse($result);
    }

    /** @test */
    function it_returns_one()
    {
        $result = addOneToLastArrayMember([0]);

        $this->assertEquals([1], $result);
    }

    /** @test */
    function it_adds_one_to_array_with_two_members()
    {
        $result = addOneToLastArrayMember([1, 2]);

        $this->assertEquals([1, 3], $result);
    }

    /** @test */
    function it_carries_bit_for_one_number()
    {
        $result = addOneToLastArrayMember([1, 9]);

        $this->assertEquals([2, 0], $result);
    }

    /** @test */
    function it_adds_carry_over_if_all_nines()
    {
        $result = addOneToLastArrayMember([9, 9]);

        $this->assertEquals([1, 0, 0], $result);
    }

    /** @test */
    function it_adds_one_to_array_members()
    {
        $result = addOneToLastArrayMember([1, 3, 9, 9]);

        $this->assertEquals([1, 4, 0, 0], $result);
    }
}