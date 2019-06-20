<?php

namespace CrackingCode\Tests;

use PHPUnit\Framework\TestCase;
use function CrackingCode\numberOfStringPermutations;

class NumberOfStringPermutationsTest extends TestCase
{
    /** 
     * @dataProvider provider
     * @test 
     */
    public function it_calculates_how_many_permutations($count, $shorterString, $longerString) 
    {
        $this->assertEquals($count, numberOfStringPermutations($shorterString, $longerString));
    }

    public function provider()
    {
        return [
            [1, 'abc', 'acbd'],
            [2, 'ab', 'bacba'],
            [2, 'ab', 'abacd'],
            [7, 'abbc', 'cbabadcbbabbcbabaabccbabc']
        ];
    }
}   
