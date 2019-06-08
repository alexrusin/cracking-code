<?php

namespace CrackingCode\Tests;

use PHPUnit\Framework\TestCase;
use function CrackingCode\mostFrequentElementInArray;

class MostFrequentElementInArrayTest extends TestCase
{
    /** @test */
    function it_throws_type_error_if_wrong_data_type()
    {
        $this->expectException(\TypeError::class);
        mostFrequentElementInArray('a');
    }

    /** @test */
    function it_returns_false_if_array_is_empty()
    {
        $result = mostFrequentElementInArray([]);

        $this->assertFalse($result);
    }

     /** @test */
     function it_returns_false_if_array_dont_have_most_frequent_elements()
     {
         $result = mostFrequentElementInArray([1, 2, 3, 4, 6]);
 
         $this->assertFalse($result);
     }

     /** @test */
     function it_returns_most_frequent_element()
     {
        $result = mostFrequentElementInArray([1, 2, 2, 3, 8, 10]);
 
        $this->assertEquals(2, $result);
     }

     /** @test */
     function it_returns_an_array_of_frequent_elements()
     {
        $result = mostFrequentElementInArray([1, 2, 2, 3, 3, 5, 6]);
 
        $this->assertEquals([2, 3], $result);
     }
}