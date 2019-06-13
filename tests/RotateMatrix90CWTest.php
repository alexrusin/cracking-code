<?php

namespace CrackingCode\Tests;

use PHPUnit\Framework\TestCase;
use function CrackingCode\rotateMatrix90CW;

class RotateMatrix90CWTest extends TestCase
{

    /** @test */
    public function it_rotates_2_by_2_matrix_90_degrees()
    {
        $matrix = [
            [1, 2],
            [3, 4]
        ];

        $matrix90 = [
            [3, 1],
            [4, 2]
        ];

        $n = 2;

        $result = rotateMatrix90CW($matrix, $n);

        $this->assertEquals($matrix90, $result);
    }

    /** @test */
    public function it_rotates_3_by_3_matrix_90_degrees()
    {
        $matrix = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];

        $matrix90 = [
            [7, 4, 1],
            [8, 5, 2],
            [9, 6, 3]
        ];

        $n = 3;

        $result = rotateMatrix90CW($matrix, $n);

        $this->assertEquals($matrix90, $result);
    }

    /** @test */
    public function it_rotates_4_by_4_matrix_90_degrees()
    {
        $matrix = [
            [1, 2, 3, 4],
            [5, 6, 7, 8],
            [9, 10, 11, 12],
            [13, 14, 15, 16]
        ];

        $matrix90 = [
            [13, 9, 5, 1],
            [14, 10, 6, 2],
            [15, 11, 7, 3],
            [16, 12, 8, 4]
        ];

        $n = 4;

        $result = rotateMatrix90CW($matrix, $n);

        $this->assertEquals($matrix90, $result);
    }
}   