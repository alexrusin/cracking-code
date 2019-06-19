<?php

namespace CrackingCode\Tests;

use PHPUnit\Framework\TestCase;
use function CrackingCode\differenceIsTwo;

class DifferenceIsTwoTest extends TestCase
{
    /** 
     * @dataProvider provider
     * @test 
     */
    public function it_counts_pairs_with_difference_of_two($count, $array) 
    {
        $this->assertEquals($count, differenceIsTwo($array));
    }

    public function provider()
    {
        return [
            [0, []],
            [0, [1]],
            [4,[1, 7, 5, 9, 2, 12, 3]],
            [1, [4, 5, 8, 10]],
            [2, [5, 8, 10, 6]]
        ];
    }
}   
