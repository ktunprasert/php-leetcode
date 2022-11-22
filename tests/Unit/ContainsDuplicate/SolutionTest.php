<?php

namespace Tests\Unit\ContainsDuplicate;

use LeetCode\ContainsDuplicate\Solution;
use Tests\TestCase;

class ValidAnagramTest extends TestCase
{
    private string $solveMethod = "containsDuplicate";

    /** @dataProvider validAnagrams */
    public function test_it_passes_when_has_duplicates(int ...$params): void
    {
        $solver = new Solution();

        $this->assertTrue($solver->{$this->solveMethod}([...$params]));
    }

    /** @dataProvider invalidAnagrams */
    public function test_it_fails_when_no_duplicates(int ...$params): void
    {
        $solver = new Solution();

        $this->assertFalse($solver->{$this->solveMethod}([...$params]));
    }

    public function validAnagrams(): array
    {
        return [
            [1, 2, 3, 1],
            [1, 1, 1, 3, 3, 4, 3, 2, 4, 2],
            [1, 2, 3, 4, 5, 6, 1],
        ];
    }

    public function invalidAnagrams(): array
    {
        return [
            [1, 2, 3, 4],
            [1],
        ];
    }
}
