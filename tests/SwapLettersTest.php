<?php

namespace CrackingCode\Tests;

use PHPUnit\Framework\TestCase;
use function CrackingCode\swapLetters;

class SwapLettersTest extends TestCase
{
    /** @test */
    public function it_returns_false_for_empty_string()
    {
        $result = swapLetters('');

        $this->assertFalse($result);
    }

    /** @test */
    public function it_returns_one_letter_word()
    {
        $result = swapLetters('I');

        $this->assertEquals('I', $result);
    }

    /** @test */
    public function it_swaps_two_letter_word()
    {
        $result = swapLetters('me');

        $this->assertEquals('em', $result);
    }

    /** @test */
    public function it_swaps_three_letter_word()
    {
        $result = swapLetters('Pal');

        $this->assertEquals('laP', $result);
    }

    /** @test */
    public function it_swaps_even_number_of_letter()
    {
        $result = swapLetters('acrobat');

        $this->assertEquals('taborca', $result);
    }

    /** @test */
    public function it_swaps_odd_number_of_letters()
    {
        $result = swapLetters('automobile');

        $this->assertEquals('elibomotua', $result);
    }
}