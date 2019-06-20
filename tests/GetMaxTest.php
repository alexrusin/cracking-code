<?php

namespace CrackingCode\Tests;

use PHPUnit\Framework\TestCase;
use function CrackingCode\getMax;

class GetMaxTest extends TestCase
{
    /** 
     * @dataProvider provider
     * @test 
     */
    public function it_gets_max_number_in_array($max, $array) 
    {
        $this->assertEquals($max, getMax($array));
    }

    public function provider()
    {
        return [
            [3, [1, 2, 3]],
            [false, []]
        ];
    }
}   
