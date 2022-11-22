<?php

namespace Tests\Unit\ValidAnagram;

use LeetCode\ValidAnagram\Solution;
use Tests\TestCase;

class ValidAnagramTest extends TestCase
{
    private string $solveMethod = "isAnagram";

    /** @dataProvider validAnagrams */
    public function test_it_passes_valid_anagram(string ...$params): void
    {
        $solver = new Solution();

        $this->assertTrue($solver->{$this->solveMethod}(...$params));
    }

    /** @dataProvider invalidAnagrams */
    public function test_it_fails_invalid_anagrams(string ...$params): void
    {
        $solver = new Solution();

        $this->assertFalse($solver->{$this->solveMethod}(...$params));
    }

    public function validAnagrams(): array
    {
        return [
            ["anagram", "gramana"],
            ["cac", "acc"],
        ];
    }

    public function invalidAnagrams(): array
    {
        return [
            ["cat", "dog"],
            ["bottle", "water"],
        ];
    }
}
