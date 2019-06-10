<?php

namespace CrackingCode\Tests;

use PHPUnit\Framework\TestCase;
use function CrackingCode\numbersAddToEight;

class NumbersAddToEightTest extends TestCase
{
    /** @test */
    public function it_returns_false_if_array_is_empty()
    {
        $result = numbersAddToEight([]);

        $this->assertFalse($result);
    }

    /** @test */
    public function it_returns_false_if_array_has_one_item()
    {
        $result = numbersAddToEight([1]);

        $this->assertFalse($result);
    }

    /** @test */
    public function it_returns_true_if_numbers_add_to_eight()
    {
        $result = numbersAddToEight([2, 3, 6]);

        $this->assertTrue($result);
    }

    /** @test */
    public function it_returns_false_if_numbers_do_not_add_up_to_eight()
    {
        $result = numbersAddToEight([1, 2, 3]);

        $this->assertFalse($result);
    }
}