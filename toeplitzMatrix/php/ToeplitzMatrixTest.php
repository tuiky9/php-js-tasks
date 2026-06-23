<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use ToeplitzMatrix\Solution;

final class ToeplitzMatrixTest extends TestCase
{
    public function testCase1(): void
    {
        $matrix = [[6, 7, 8], [4, 6, 7], [1, 4, 6]];
        $this->assertEquals(true, Solution::solution($matrix));
    }

    public function testCase2(): void
    {
        $matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
        $this->assertEquals(false, Solution::solution($matrix));
    }

    public function testCase3(): void
    {
        $matrix = [[1, 7], [5, 1]];
        $this->assertEquals(true, Solution::solution($matrix));
    }

    public function testCase4(): void
    {
        $matrix = [[9]];
        $this->assertEquals(true, Solution::solution($matrix));
    }

    public function testCase5(): void
    {
        $matrix = [[1, 5, 9], [6, 1, 5], [11, 6, 1]];
        $this->assertEquals(true, Solution::solution($matrix));
    }

    public function testCase6(): void
    {
        $matrix = [[1, 2, 1], [0, 1, 2], [3, 0, 1]];
        $this->assertEquals(true, Solution::solution($matrix));
    }

    public function testCase7(): void
    {
        $matrix = [[-4, -9, -4], [-3, -4, -9], [-2, -3, -4]];
        $this->assertEquals(true, Solution::solution($matrix));
    }

    public function testCase8(): void
    {
        $matrix = [[1, 2, 1], [2, 1, 2], [3, 2, 1]];
        $this->assertEquals(true, Solution::solution($matrix));
    }

    public function testCase9(): void
    {
        $matrix = [[3, 3, 3], [3, 1, 3], [3, 3, 3]];
        $this->assertEquals(false, Solution::solution($matrix));
    }

    public function testCase10(): void
    {
        $matrix = [[4, 4, 4, 4], [1, 4, 4, 4], [4, 1, 4, 4], [4, 4, 0, 4]];
        $this->assertEquals(false, Solution::solution($matrix));
    }

    public function testCase11(): void
    {
        $matrix = [[5, 5], [5, 4]];
        $this->assertEquals(false, Solution::solution($matrix));
    }

    public function testCase12(): void
    {
        $matrix = [[10, 9], [8, 10]];
        $this->assertEquals(true, Solution::solution($matrix));
    }

    public function testCase13(): void
    {
        $matrix = [[7, 7, 7], [7, 7, 0], [7, 0, 7]];
        $this->assertEquals(false, Solution::solution($matrix));
    }
}
